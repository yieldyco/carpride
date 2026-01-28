<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude([
        '.github',
        'config',
        'deploy',
        'env',
        'templates',
        'var',
        'vendor',
    ])
    ->ignoreDotFiles(true);

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        'blank_line_before_statement' => [
            'statements' => [
                'if',
                'for',
                'foreach',
                'while',
                'do',
                'switch',
                'return',
                'try',
                'throw',
            ],
        ],
    ])
    ->setFinder($finder);
