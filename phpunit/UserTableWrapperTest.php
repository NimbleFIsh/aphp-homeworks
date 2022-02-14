<?php
    class UserTableWrapperTest extends PHPUnit_Fraemwork_TestCase
    {
        private $userTable;

        protected function setUp()
        {
            $this->userTable = new UserTableWrapper();
            $this->userTable->insert([ 'id' => 1, 'name' => 'Влад', 'phone' => '88005553535' ]);
        }

        protected function tearDown()
        {
            $this->userTable = NULL;
        }

        public function testInsert()
        {
            $this->userTable->insert([ 'id' => 1, 'name' => 'Влад', 'phone' => '88005553535' ]);
            $this->assertEquals(["id" => 2, "name" => "Юрий", "phone"=> "89085553535"], $this->userTable->get());
        }

        public function testUpdate()
        {
            $this->userTable->update(1, ['name' => 'Владислав']);
            $this->assertEquals(["id" => 2, "name" => "Владислав", "phone"=> "89085553535"], $this->userTable->get());
        }

        public function testDelete()
        {
            $this->userTable->delete(2);
            $this->assertEquals([], $this->userTable->get());
        }

        public function testGet()
        {
            $this->assertEquals(["id" => 2, "name" => "Владислав", "phone"=> "89085553535"], $this->userTable->get());
        }
    }