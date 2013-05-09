<?php
/**
 * This makes our life easier when dealing with paths.
 * Everything is relative to the application root now.
 */
chdir(dirname(__DIR__));

// Setup autoloading
$loader = require_once 'tests/autoload.php';

//load SF2 App Kernel
require_once 'tests/AppKernel.php';
$kernel = new AppKernel('development', true);
$kernel->loadClassCache();

//initialize Bundles and Container
$kernel->boot();

$SF2Container = $kernel->getContainer();

$bizModel = $SF2Container->get('mvs_sample.productbizmodel');
$products = $bizModel->findAll();
var_dump($products);
