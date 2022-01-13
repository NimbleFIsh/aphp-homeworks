<?php
    class Director
    {
        public $status = "директор";

        static $count = 0;
        static $tmoney = 0;

        public function __construct(string $fname, string $lname, int $money, bool $vizit)
        {
            self::$count++;
            self::$tmoney += $money;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->money = $money;
            $this->vizit = $vizit;
        }

        public function getFI()
        {
            return $this->lname." ".$this->fname;
        }

        public function getSocStatus()
        {
            return 4;
        }

        public function work()
        {
            return "управляет всеми";
        }

        public function getMoney()
        {
            return $this->money;
        }

        public function isVisit()
        {
            return $this->visit ? "на совещании" : "свободен";
        }
    }