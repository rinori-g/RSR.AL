<?php
spl_autoload_register(function ($class_name) {

    $prefix = 'App\\';
    $base_dir = __DIR__ . '/';
    $len = strlen($prefix);
	
    if (strncmp($prefix, $class_name, $len) !== 0) {
        return;
    }

    $relative_class = substr($class_name, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
?>