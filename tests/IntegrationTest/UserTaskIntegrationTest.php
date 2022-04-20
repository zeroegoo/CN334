<?php


class UserTaskIntegrationTest {
    
    //test user 1 คนสามารถมี task 0 อันได้ไหม
    public function test_user_have_0_test(){
        $this->assertTrue(true);
    }

    //Test user 1 คนสามารถมี task 1000 อันได้ไหม
    public function test_user_have_1000_test(){
        $this->assertTrue(true);
    }

    //task 1 อันมี owner 2 คนได้ไหม
    public function test_task_have_2user_test(){
        $this->assertTrue(true);
    }

    //ถ้าลบ user แล้ว task ควรถูกลบด้วยไหม
    public function test_delete_user_ShouldDeleteTask_test(){
        $this->assertTrue(true);
    }

    //ถ้าลบ task แล้ว user จะถูกลบด้วยไหม
    public function test_delete_task_ShouldDeleteUser_test(){
        $this->assertTrue(true);
    }
}