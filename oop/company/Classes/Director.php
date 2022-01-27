<?php
    class Director extends Base
    {
        public $status = "директор";

        static $count = 0;
        static $tmoney = 0;

        public function __construct(string $fname, string $lname, int $money, bool $vizit)
        {
            parent::__construct($fname, $lname, $money, 4);
            self::$count++;
            self::$tmoney += $money;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->money = $money;
            $this->vizit = $vizit;
        }

        public function work()
        {
            return "управляет всеми";
        }

        public function isVisit()
        {
            return $this->visit ? "на совещании" : "свободен";
        }
    }