<?php
    class Manager extends Base
    {
        public $status = "менеджер";

        static $count = 0;
        static $tmoney = 0;

        public function __construct(string $fname, string $lname, int $money, string $theme)
        {
            parent::__construct($fname, $lname, $money, 1);
            self::$count++;
            self::$tmoney += $money;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->money = $money;
            $this->theme = $theme;
        }

        public function work()
        {
            return "может проводить вебинары"." на тему: ".$this->theme;
        }
    }