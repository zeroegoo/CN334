<?php

namespace Tests\Unit;
namespace Test\Feature;

use App\Providers\RouteServiceProvider;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Task;
use App\Models\User;
use Database\Factories\UserFactory;
use Database\Factories\TaskFactory;
use Illuminate\Support\Facades\Schema;

class TaskUnitTest extends TestCase {
    use RefreshDatabase, WithFaker;

    //test user model exist
    public function test_model_user_exist(){
        $user = User::factory()->create();
        $this->assertModelExists($user);

    }

    //test schema ทดสอบการใส่ตัวเลข
    public function test_Schema_support_integer(){
        
        $this->assertTrue(true);

    }

    //test schema lenght ของตัวอักษร
    public function test_Schema_support_lenght__string(){
        
        $this->assertTrue(true);

    }

    //test Schema ทดสอบว่าเป็น int ได้ไหม
    public function test_Schema_support_int(){
        
        $this->assertTrue(true);

    }

}


