<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /*
     * Tests whether the buttons redirect to correct pages.
     */
    public function testButtonRedirects()
    {
        $this->visit('/')
            ->click('Register')
            ->seePageIs('/register');
    }

    public function testRegistration()
    {
        $name = str_random(8);
        $email = $name . '@laravel.com';

        $this->visit('/register')

                ->type($name, 'name')
                ->type($email, 'email')
                ->type('secret', 'password')
                ->type('secret', 'password_confirmation')
                ->press('Register')
                ->seePageIs('/home');
    }
}
