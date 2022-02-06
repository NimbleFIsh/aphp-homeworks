<?php
    class Person
    {
        private $name;
        private $age;

        public function __construct(string $name, int $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function __get($prop)
        {
            return isset($this->prop) ? $this->prop : "Свойства ($prop) не существует в классе ".__CLASS__;
        }

        public function __set($prop, $data)
        {
            return isset($this->prop) ? $this->prop : "Свойства ($prop) не существует в классе ".__CLASS__;
        }

        public function __sleep()
        {
            return array("Привет, меня зовут ".$this->name.", мне ".$this->age."<br />");
        }

        public function __wakeup(array $data)
        {
            var_dump($data);
            return new Person($data);
        }
    }