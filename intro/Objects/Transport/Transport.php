<?php
    class Transport
    {
        private $mark;
        private $color;
        public $speed = 0;

        public function __construct(string $c_mark, string $c_color)
        {
            $this->mark = $c_mark;
            $this->color = $c_color;
        }

        public function getMark()
        {
            return $this->mark;
        }

        public function getColor()
        {
            return $this->color;
        }

        public function Speed(int $spd)
        {
            $this->speed = $spd;
        }
    }