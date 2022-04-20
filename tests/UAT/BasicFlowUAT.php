<?php

class BasicFlowUAT {
    //add task 
    public function test_addTask_UAT()
    {
        $this->assertTrue(true);
    }
    //edit task
    public function test_editTask_UAT()
    {
        $this->assertTrue(true);
    }
    //delete task
    public function test_deleteTask_UAT()
    {
        $this->assertTrue(true);
    }

    //login UAT
    public function test_login_UAT()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    //regiter UAT
    public function test_new_users_register()
    {
        if (! Features::enabled(Features::registration())) {
            return $this->markTestSkipped('Registration support is not enabled.');
        }

        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password', 
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature(),
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}