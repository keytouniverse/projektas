<?php

namespace App;

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
        echo "Redirection is working...";
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
            // Checks whether registration is successful.
                ->seePageIs('/home');
        echo "\nRegistration is working as intended...";
    }

    public function testExpenses()
    {
        $user = factory(User::class)->create();
        $spentMoney1 = rand(1,600);
        $spentMoney2 = rand(1,600);

        $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->visit('/expenses')
            // Checks whether the username is visible somewhere on the page
            ->see($user->name)
            ->type((string)$spentMoney1,'amount')
            ->select(rand(1,10),'category')
            ->press('ADD')
            ->type((string)$spentMoney2,'amount')
            ->select(rand(1,10),'category')
            ->press('ADD')
            // Checks whether the added values are visible somewhere on the Expenses page
            ->see($spentMoney1+$spentMoney2);
        echo "\n'Expenses' page functions correctly...";
    }
}
