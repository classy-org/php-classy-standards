<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()->in(getcwd());

return Config::create()
    ->setRules([
        '@Symfony' => true,
        'concat_space' => ['spacing' => 'one'],
        'binary_operator_spaces' => [
            'align_double_arrow' => true,
            'align_equals' => false,
        ],
        'self_accessor' => false,
        'phpdoc_order' => true
    ])
    ->setFinder($finder)
    ->setUsingCache(true)
    ->setCacheFile(__DIR__ . '/.php_cs.cache');
