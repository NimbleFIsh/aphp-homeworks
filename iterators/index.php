<?php
    spl_autoload_register(function ($class) { include __DIR__."/Classes/".$class.".php"; });

    $arr = [
        [ 'name' => 'Юрий',      'age' => 23 ],
        [ 'name' => 'Генадий',   'age' => 67 ],
        [ 'name' => 'Владимир',  'age' => 22 ],
        [ 'name' => 'Екатерина', 'age' => 18 ]
    ];

    try
    {
        $list = new PeopleList();
        
        for ($i = 0; $i < sizeof($arr); $i++)
            $list->add($arr[$i]);
        
        for ($i = 0; $i < sizeof($arr); $i++)
        {
            $el = serialize($list);
            var_dump($el);
            unserialize();
            echo "<br />";
            $list->next();
        }
    }
    catch(OutOfBoundsException $e) { echo $e->getMessage(); }