<?php
/**
 * Created by PhpStorm.
 * User: Dinas
 * Date: 2018-05-21
 * Time: 12:04
 */

namespace App\Models;

class User
{
    protected $first_name;
    protected $last_name;
    protected $email;

    public function setFirstName($firstName)
    {
        $this->first_name = trim($firstName);
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($lastName)
    {
        $this->last_name = trim($lastName);
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getFullName()
    {
        return "$this->first_name $this->last_name";
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getEmailVariables()
    {
        return [
            'full_name' => $this->getFullName(),
            'email' => $this->getEmail(),
        ];
    }
}