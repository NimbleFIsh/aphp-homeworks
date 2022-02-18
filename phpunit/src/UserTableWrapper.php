<?php
    class UserTableWrapper
    {
        private $rows;

        public function insert(array $values)
        {
            $this->rows[] = $values;
        }

        public function update(int $id, array $values)
        {
            $data = array_filter($this->rows, function($a) use ($id) { return ($a['id'] == $id); })[0];
            $this->delete($id);

            foreach($values as $key => $val)
                $data = array_filter($data, function($g) use ($key) { return $g != $key; }, ARRAY_FILTER_USE_KEY);
            
            foreach($values as $key => $val)
                $data[$key] = $val;
            
                $this->rows = array_merge($this->rows, array($data));
        }

        public function delete(int $id)
        {
            $this->rows = array_filter($this->rows, function($a) use ($id) { return ($a['id'] != $id); });
        }

        public function get()
        {
            return $this->rows;
        }
    }