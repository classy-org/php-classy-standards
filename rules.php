<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()->in(getcwd());

return Config::create()
    ->setRules([
        // psr1
        'encoding'         => true,
        'full_opening_tag' => true,

        // psr2
        'braces'                        => true,
        'elseif'                        => true,
        'single_blank_line_at_eof'      => true,
        'no_spaces_after_function_name' => true,
        'function_declaration'          => true,
        'indentation_type'              => true,
        'blank_line_after_namespace'    => true,
        'line_ending'                   => true,
        'lowercase_constants'           => true,
        'lowercase_keywords'            => true,
        'method_argument_space'         => true,
        'single_import_per_statement'   => true,
        'no_spaces_inside_parenthesis'  => true,
        'no_closing_tag'                => true,
        'single_line_after_imports'     => true,
        'no_trailing_whitespace'        => true,
        'visibility_required'           => true,

        // other fixers
        'concat_space'                       => ['spacing' => 'one'],
        'no_extra_consecutive_blank_lines'   => true,
        'new_with_braces'                    => true,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc'        => true,
        'object_operator_without_whitespace' => true,
        'binary_operator_spaces'             => [
            'default' => 'single_space',
            'operators' => [
                '=>' => 'align_single_space_minimal'
            ],
        ],
        'self_accessor'                      => false,
        'single_quote'                       => true,
        'standardize_not_equals'             => true,
        'unary_operator_spaces'              => true,
        'no_unused_imports'                  => true,
        'no_whitespace_in_blank_line'        => true,
        'phpdoc_order'                       => true,
    ])
    ->setFinder($finder)
    ->setUsingCache(true)
    ->setCacheFile(__DIR__ . '/.php_cs.cache');
