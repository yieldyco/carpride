<?php
ini_set('memory_limit', '512M');

$basedir='/var/www/carpride.com.ua/image';

$servername = "localhost";
$username = "carpride_user";
$password = "7;6e&mT9Zp";
$dbname = "carpride";

    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$cat_by_name = [];

foreach (explode("\n", file_get_contents('/var/www/carpride.com.ua/update_catalog/names_categories.txt')) as $cn) {
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

$final_rows = [];

while (($row = fgetcsv($fh, 0, $delimiter, $enclosure, $escape)) !== false) {

    if ($rc == 0) {
        $row[] = 'in_stock';
        $row[] = 'last_category';
    }

    if ($rc > 0) {
        $row[] = 1;

        $row[] = $cat_by_name[$row[1]];

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
	    
	    if(!file_exists($basedir.'/'.$img_path)){
		    
		    $result=$conn->query('INSERT INTO jtgd_product_image_download (product_id, image, sort_order, status) values (0, "'.$img_path.'", 0, "waiting")');
		    
	    }
	    
	    
    }

    //print_r($imgs);


    $final_rows[] = $row;
    
    /*
    if(count($row)!=23){
    
    echo $row[0];
    echo ' - ';
    echo count($row);
    echo '<br>';
    }*/
}
fclose($fh);

//exit;

$fp = fopen("/var/www/carpride.com.ua/admin/uploads/readyproducts.csv", "w");

// optional: write BOM if you want Excel to recognize UTF-8
// fwrite($fp, "\xEF\xBB\xBF");

foreach ($final_rows as $row) {
    fputcsv($fp, $row, ";"); // use ";" or "," depending on your needs
}
fclose($fp);
