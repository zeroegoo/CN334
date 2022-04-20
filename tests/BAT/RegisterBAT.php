<?php

class RegisterBAT {
    
    //test กรอก username เป็นภาษาไทย
    public function Test_Creat_ThaiUser(){
        $user = new User([
            'name' => "สหัสวรรษ",
            'email' => "test@gmail.com",
            'password' => bcrypt("testpassword")
        ]);
        $this->assertEquals('Test User', $user->name);
    }

    //test กรอก email เป็นภาษาไทย
    public function Test_User_Register_ThaiEmailAccount(){
        $user = new User([
            'name' => "Test User",
            'email' => "สหัสวรรษ@gmail.com",
            'password' => bcrypt("testpassword"),
            
        ]);
        $this->assertEquals('Test User', $user->name);
    }

    //test กรอก password โดยไม่ใส่ตัวเลข
    public function Test_User_Register_NoPassword(){
        $user = new User([
            'name' => "Test User",
            'email' => "สหัสวรรษ@gmail.com",
            'password' => bcrypt("พาสเวิด"),
            
        ]);
        $this->assertEquals('Test User', $user->name);
    }

}