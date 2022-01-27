<?php
    class Tester extends Base
    {
        public $status = "тестировщик";

        static $count = 0;
        static $tmoney = 0;

        public function __construct(string $fname, string $lname, int $money, int $countBugs)
        {
            parent::__construct($fname, $lname, $money, 3);
            self::$count++;
            self::$tmoney += $money;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->money = $money;
            $this->countBugs = $countBugs;
        }

        public function work()
        {
            return "тестирует приложения";
        }

        public function getCountBugs()
        {
            return $this->countBugs;
        }
    }