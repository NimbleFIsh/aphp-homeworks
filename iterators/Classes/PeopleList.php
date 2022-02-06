<?php
    class PeopleList implements Iterator
    {
        private $position = 0;
        private $data = [];

        public function __construct()
        {
            $this->position = 0;
        }

        public function add($data)
        {
            array_push($this->data, new Person($data['name'], $data['age']));
        }

        public function seek($position)
        {
            if (!isset($this->data[$position])) throw new OutOfBoundsException("недействительная позиция ($position)");
            $this->position = $position;
        }

        public function rewind()
        {
            $this->position = 0;
        }

        public function current()
        {
            return $this->data[$this->position];
        }

        public function key()
        {
            return $this->position;
        }

        public function next()
        {
            ++$this->position;
        }

        public function valid()
        {
            return isset($this->data[$this->position]);
        }

        public function __sleep()
        {
            return array(serialize($this->current()));
        }

        public function __wakeup(array $data)
        {
            unserialize($data);
        }
    }