<?php
    class Human
    {
        private $fname;
        private $lname;
        public $year;

        public function __construct(string $c_fname, string $c_lname, int $c_year)
        {
            $this->fname = $c_fname;
            $this->lname = $c_lname;
            $this->year = $c_year;
        }

        public function getFName()
        {
            return $this->fname;
        }

        public function getLName()
        {
            return $this->lname;
        }

        public function getAge()
        {
            return date('Y') - $this->year;
        }

        public function Hello()
        {
            return "Hello, My name is ".$this->getFName()." ".$this->getLName().", I'm ".$this->getAge()." years old!<br />";
        }
    }