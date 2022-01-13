<?php
    class Worker
    {
        public $status = "рабочий";

        static $count = 0;
        static $tmoney = 0;

        public function __construct(string $fname, string $lname, int $money, $null)
        {
            self::$count++;
            self::$tmoney += $money;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->money = $money;
        }

        public function getFI()
        {
            return $this->lname." ".$this->fname;
        }

        public function getSocStatus()
        {
            return 0;
        }

        public function work()
        {
            return "просто работает";
        }

        public function getMoney()
        {
            return $this->money;
        }
    }