<?php

spl_autoload_register(function (string $myClass) {

    $filePath = str_replace('System\\MyHospital', 'app', $myClass);
    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $filePath);
    $filePath .= '.php';

    if (file_exists($filePath)) {
        require_once $filePath;
    }
});

?>