<?php
require_once __DIR__ . '/../config.php';
ini_set('memory_limit', '1G');           // Increase memory limit
//ini_set('max_execution_time', 600);     // 10 minutes execution time
//set_time_limit(600);

// /var/www/html/image/
$dirImage = DIR_IMAGE;
// /var/www/html/admin/uploads/readyproducts.csv
$readyProductsCsvPath = READY_PRODUCTS_CSV_PATH;
// /var/www/html/update_catalog/names_categories.txt
$updateCatalogFilePath = UPDATE_CATALOG_FILE_PATH;


    // Create connection
$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$cat_by_name = [];

foreach (explode("\n", file_get_contents($updateCatalogFilePath)) as $cn) {
    list($name, $cat) = explode("\t", $cn);

    $cat_by_name[$name] = $cat;
}

$path = 'https://export.baz-on.net/export/c758/9a637/carpride-site-products.csv';
$delimiter = ";";            // many RU/UA Excel exports use semicolon
$enclosure = '"';
$escape    = "\\";           // PHP uses \ as escape by default

$fh = fopen($path, 'r');
if ($fh === false) {
    throw new RuntimeException("Cannot open $path");
}

// convert.iconv.<from>/<to> uses iconv underneath
// Add //TRANSLIT or //IGNORE to handle unmappable chars
$filter = @stream_filter_append(
    $fh,
    'convert.iconv.windows-1251/UTF-8//TRANSLIT',
    STREAM_FILTER_READ
);
if ($filter === false) {
    // Fallback if iconv filter isn't available
    trigger_error('Iconv stream filter not available, falling back to per-field conversion', E_USER_WARNING);
}

$rc = 0;

// Open output file immediately
$fp = fopen($readyProductsCsvPath, "w");
if ($fp === false) {
    throw new RuntimeException("Cannot create output file");
}
// Write BOM for proper UTF-8 display in Excel
fwrite($fp, "\xEF\xBB\xBF");

while (($row = fgetcsv($fh, 0, $delimiter, $enclosure, $escape)) !== false) {

    if ($rc == 0) {
        $row[] = 'in_stock';
        $row[] = 'last_category';
    }

    if ($rc > 0) {
        $row[] = 1;

        $row[] = $cat_by_name[$row[1]] ?? '';

        if ($row[4] == '') {
            $row[4] = 'Not specified';
        }
        if ($row[6] == '') {
            $row[6] = 'Not specified';
        }
        if ($row[3] == 'Mercedes Benz') {
            $row[3] = 'Mercedes-Benz';
        }
        
        if ($row[3] == 'Mercedes') {
            $row[3] = 'Mercedes-Benz';
        }
        
        if($row[3]=='Mercedes-Benz' && $row[4]=='GL-class'){
	        $row[4]='GL';
        }
        
        if($row[3]=='BMW' && $row[4]=='3'){
	        $row[4]='3-series';
        }
        
        if($row[3]=='Honda' && $row[4]=='CRV'){
	        $row[4]='CR-V';
        }
    }

    $rc++;
    // If we couldn't attach the filter, convert fields manually:
    if ($filter === false) {
        foreach ($row as &$v) {
            // auto detects source best-effort; specify 'Windows-1251' if consistent
            echo $v = mb_convert_encoding($v, 'UTF-8', 'Windows-1251');
        }
        unset($v);
    }
    
    $imgs=explode(", ", $row[17]);
    
    foreach($imgs as $ind=>$img){
	    $img_path=str_replace('https://3fb394a7-cdc0-4e09-a75f-727196cc50fd.selcdn.net/pub/c758/productphoto/', 'catalog/', $img);

        if (!file_exists($dirImage . $img_path)) {
            $result=$conn->query('INSERT INTO jtgd_product_image_download (product_id, image, sort_order, status) values (0, "'.$img_path.'", 0, "waiting")');
        }
    }


    // Write row to file immediately (don't accumulate in memory)
    fputcsv($fp, $row, ";");
    
    // Periodically flush buffer (every 100 rows)
    if ($rc % 100 == 0) {
        fflush($fp);
    }

}

// Close both files
fclose($fh);
fclose($fp);

echo "✅ Processed rows: " . $rc . "\n";
echo "✅ File created: $readyProductsCsvPath\n";
