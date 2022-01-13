<?php
    class Manager
    {
        public $status = "менеджер";

        static $count = 0;
        static $tmoney = 0;

        public function __construct(string $fname, string $lname, int $money, string $theme)
        {
            self::$count++;
            self::$tmoney += $money;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->money = $money;
            $this->theme = $theme;
        }

        public function getFI()
        {
            return $this->lname." ".$this->fname;
        }

        public function getSocStatus()
        {
            return 1;
        }

        public function work()
        {
            return "может проводить вебинары"." на тему: ".$this->theme;
        }

        public function getMoney()
        {
            return $this->money;
        }
    }