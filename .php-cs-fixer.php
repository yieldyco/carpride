<?php

declare(strict_types=1);

$baseConfig = require __DIR__.'/.php-cs-fixer.dist.php';

$baseRules = $baseConfig->getRules();

$myRules = array_merge($baseRules, [
    'declare_strict_types' => true,
]);

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules($myRules)
    ->setFinder($baseConfig->getFinder())
    ->setCacheFile($baseConfig->getCacheFile());
