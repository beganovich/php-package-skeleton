<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

$config = new PhpCsFixer\Config();

return $config->setRules([
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
    'no_unused_imports' => true,
    'ordered_imports' => [
        'sort_algorithm' => 'length',
    ],
])->setFinder($finder);
