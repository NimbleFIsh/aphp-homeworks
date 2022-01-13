<?php
    class Programmer
    {
        public $status = "программист";

        static $count = 0;
        static $tmoney = 0;

        public function __construct(string $fname, string $lname, int $money, bool $status)
        {
            self::$count++;
            self::$tmoney += $money;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->money = $money;
            $this->status = $status;
        }

        public function getFI()
        {
            return $this->lname." ".$this->fname;
        }

        public function getSocStatus()
        {
            return 2;
        }

        public function work()
        {
            return "пишет код";
        }

        public function getMoney()
        {
            return $this->money;
        }

        public function inWork()
        {
            return $this->status ? "работает над проектом" : "готов начать работу";
        }
    }