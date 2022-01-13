<?php
    class Tester
    {
        public $status = "тестировщик";

        static $count = 0;
        static $tmoney = 0;

        public function __construct(string $fname, string $lname, int $money, int $countBugs)
        {
            self::$count++;
            self::$tmoney += $money;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->money = $money;
            $this->countBugs = $countBugs;
        }

        public function getFI()
        {
            return $this->lname." ".$this->fname;
        }

        public function getSocStatus()
        {
            return 3;
        }

        public function work()
        {
            return "тестирует приложения";
        }

        public function getMoney()
        {
            return $this->money;
        }

        public function getCountBugs()
        {
            return $this->countBugs;
        }
    }