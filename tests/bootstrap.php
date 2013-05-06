<?php
/**
 * This makes our life easier when dealing with paths.
 * Everything is relative to the application root now.
 */
dirname(dirname(dirname(__DIR__)));

// Setup autoloading
require_once 'vendor/autoload.php';

//load SF2 App Kernel
require_once 'tests/SF2AppKernel.php';
$kernel = new SF2AppKernel('development', true);
$kernel->loadClassCache();

//initialize Bundles and Container
$kernel->boot();

$SF2Container = $kernel->getContainer();
