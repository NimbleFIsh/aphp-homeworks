<?php
    class Base
    {
        public function __construct(string $lname, string $fname, int $money, int $soc)
        {
            $this->lname = $lname;
            $this->fname = $fname;
            $this->money = $money;
            $this->soc = $soc;
        }

        public function getFI()
        {
            return $this->lname." ".$this->fname;
        }

        public function getMoney()
        {
            return $this->money;
        }

        public function getSocStatus()
        {
            return $this->soc;
        }
    }