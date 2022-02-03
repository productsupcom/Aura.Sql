<?php

$config = new Productsup\Cs\Config;
$config
    ->getFinder()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests')
;

$config
    ->setRiskyAllowed(true)
    ->setCacheFile(__DIR__ . '/.php-cs-fixer.cache')
    ->setAdditionalRules([

    ])
;

return $config;
