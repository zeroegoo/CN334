<?php

class RegisterBAT {
    
    //test กรอก password ผิด
    public function Test_Login_WrongPassword(){

        $user = User::factory()->create();
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }

    //test กรอก email โดยไม่มีการใส่ Domain
    public function Test_Login_WithNoDomain(){

        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => 'sahassawat',
            'password' => 'password',
        ]);

        $this->assertGuest();
    
    }
    //test กรอก email โดยมีอักษรพิเศษประกอบอยู่ด้วย
    public function Test_Login_WithSpecialChar(){
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

}

