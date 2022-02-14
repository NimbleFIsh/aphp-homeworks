<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    spl_autoload_register(function ($class) { include __DIR__."/".$class.".php"; });

    $test = new UserTableWrapperTest();
    $test->testInsert();
    $test->testUpdate();
    $test->testGet();
    $test->testDelete();
    