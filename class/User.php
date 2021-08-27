<?php
class User
{
    public $name;
    public $email;
    public $password;

    public function speak($message)
    {
        echo $message;
    }

    public function fullName()
    {
        return "{$this->last_name} {$this->first_name}";
    }

}
