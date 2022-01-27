<?php
    class Worker extends Base
    {
        public $status = "рабочий";

        static $count = 0;
        static $tmoney = 0;

        public function __construct(string $fname, string $lname, int $money, $null)
        {
            parent::__construct($fname, $lname, $money, 0);
            self::$count++;
            self::$tmoney += $money;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->money = $money;
        }

        public function work()
        {
            return "просто работает";
        }
    }