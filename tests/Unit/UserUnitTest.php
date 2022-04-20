<?php

class UserUnitTest {
    //test create account
    public function Test_User_Creat_Account(){
        $user = new User([
            'name' => "Test User",
            'email' => "test@gmail.com",
            'password' => bcrypt("testpassword")
        ]);
        $this->assertEquals('Test User', $user->name);
    }

    //test กรอก username เป็นภาษาไทย
    public function Test_Creat_ThaiUser(){
        $user = new User([
            'name' => "สหัสวรรษ",
            'email' => "test@gmail.com",
            'password' => bcrypt("testpassword")
        ]);
        $this->assertEquals('Test User', $user->name);
    }

    // test user ไม่ได้ input ตัว domain
    public function Test_Creat_Account_NoDomain(){
        $user = new User([
            'name' => "สหัสวรรษ",
            'email' => "test",
            'password' => bcrypt("testpassword")
        ]);
        $this->assertEquals('Test User', $user->name);
    }
    
}