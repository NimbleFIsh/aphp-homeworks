<?php
    $int = 123;
    $float = 5.5;
    $string = "привет мир!";
    $bool = true;
    $array = [ 1, 6, 3];
    $null = null;

    function calculate($data)
    {
        throw new ErrorException("Переменная со значением = ".$data.", имеет тип ".gettype($data)."<br /><br />"); 
    }

    try {
        calculate($int);
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }

    try {
        calculate($float);
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }

    try {
        calculate($string);
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }

    try {
        calculate($bool);
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }

    try {
        calculate($array);
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }

    try {
        calculate($null);
    }
    catch (Exception $e)
    {
        echo $e->getMessage();
    }