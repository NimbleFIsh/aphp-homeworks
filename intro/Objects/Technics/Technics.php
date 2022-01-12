<?php
    class Technics
    {
        private $brand;
        private $operator;
        public $channel;

        public function __construct(string $c_brand, string $c_operator, int $c_channel)
        {
            $this->brand = $c_brand;
            $this->operator = $c_operator;
            $this->channel = $c_channel;
        }

        public function getBrand()
        {
            return $this->brand;
        }

        public function getOperator()
        {
            return $this->operator;
        }
    }