<?php

    function loadLibOne($className)
    {
        if (file_exists('library1/' . $className . '.php')) {
            require_once 'library1/' . $className . '.php';
        }
    }

    function loadLibTwo($className)
    {
        if (file_exists('library2/' . $className . '.php')) {
            require_once 'library2/' . $className . '.php';
        }
    }

    spl_autoload_register('loadLibOne');
    spl_autoload_register('loadLibTwo');

    $anotherObject = new AnotherClass();