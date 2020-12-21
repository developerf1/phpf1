<?php
declare(strict_types = 1);

function psrAutoLoader($class)
{
    // project-specific namespace prefix
    $prefix = '';

    // The main base directory is 2 level up from the current directory
    $baseDir = dirname(__DIR__, 2);
    // In case of test the base dir differs from normal execution so alter the basedir
    $baseDir .= DIRECTORY_SEPARATOR . 'phpf1' . DIRECTORY_SEPARATOR . 'src';

    // Does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoLoader
        return;
    }

    // If class has no namespace then move to the old autoloader
    if (strpos($class, '\\') === false) {
        return;
    }

    // get the relative class name
    $relativeClass = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace separators
    // with directory separators in the relative class name, append with .php
    $file = str_replace('\\', '/', $baseDir . DIRECTORY_SEPARATOR . $relativeClass) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        /** @noinspection PhpIncludeInspection */
        require $file;
    } else {
        // check the vendor directory
        $vendorDir = $baseDir . DIRECTORY_SEPARATOR . 'vendor';
        $file = str_replace('\\', '/', $vendorDir . DIRECTORY_SEPARATOR . $relativeClass) . '.php';
        if (file_exists($file)) {
            /** @noinspection PhpIncludeInspection */
            require $file;
        }
    }
}

spl_autoload_register('psrAutoLoader');
