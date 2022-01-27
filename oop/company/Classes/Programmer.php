<?php
    class Programmer extends Base
    {
        public $status = "программист";

        static $count = 0;
        static $tmoney = 0;

        public function __construct(string $fname, string $lname, int $money, bool $status)
        {
            parent::__construct($fname, $lname, $money, 2);
            self::$count++;
            self::$tmoney += $money;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->money = $money;
            $this->status = $status;
        }

        public function work()
        {
            return "пишет код";
        }

        public function inWork()
        {
            return $this->status ? "работает над проектом" : "готов начать работу";
        }
    }