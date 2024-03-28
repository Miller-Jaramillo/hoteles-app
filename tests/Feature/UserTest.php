<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{


    use RefreshDatabase;
   // use DatabaseTransactions;

   public function testCreateUser()
   {
       $user = User::factory()->create([
           'name' => 'John Doe',
           'email' => 'john@example.com',
       ]);

       $this->assertEquals('John Doe', $user->name);
       $this->assertEquals('john@example.com', $user->email);
   }
}
