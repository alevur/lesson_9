<?php
interface СanMove {
    public function move();
}

interface СanFly {
    public function move();
}

class Car implements СanMove {

    public function move()
    {
        echo "Движение автомобиля<br>";
    }
}

class Aircraft  implements СanFly {

    public function move()
    {
        echo "Полёт самолёта<br>";
    }
}

$car = new Car();
$airplane = new Aircraft();
$car ->move();
$airplane ->move();
