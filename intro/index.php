<?php
    declare(strict_types=1);
    
    spl_autoload_register(function ($class)
    {
        $path = __DIR__."/Objects/".$class."/".$class.".php";
        echo "<div class=\"log\">LOG: load class ".$class." in path ".$path."</div>";
        if (file_exists($path))
            require_once($path);
        else echo "Error load class ".$class."\n";
    });

    $student = new Human("Юрий", "Карпов", 2001);
    $car = new Transport("Mercedes-Benz", "Чёрный");
    $tv = new Technics("Telefunken", "Tricolor", 1);

    echo "<br /><div id=\"content\">";

    echo "Имя студента: ".$student->getFName()."<br />";
    echo "Фамилия студента: ".$student->getLName()."<br />";
    echo "Год рождения студента: ".$student->year."<br />";
    echo "Возраст студента: ".$student->getAge()."<br />";
    echo "Приветствие: ".$student->Hello();

    echo "<br />";

    echo "Марка машины: ".$car->getMark()."<br />";
    echo "Цвет машины: ".$car->getColor()."<br />";
    echo "Скорость машины: ".$car->speed." км/ч<br />";
    echo "Изменение скорости...<br />";
    $car->Speed(90);
    echo "Скорость машины: ".$car->speed." км/ч<br />";

    echo "<br />";

    echo "Бренд телевизора: ".$tv->getBrand()."<br />";
    echo "Оператор телевизора: ".$tv->getOperator()."<br />";
    echo "Текущий канал телевизора: ".$tv->channel."<br />";
    echo "Смена канала...<br />";
    $tv->channel = 8;
    echo "Текущий канал телевизора: ".$tv->channel."<br />";

    echo "</div>";