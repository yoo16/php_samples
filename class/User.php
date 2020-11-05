<?php
class User
{
    public $last_name;
    public $first_name;
    public $email;

    public function speak($message)
    {
        echo $message;
    }

    public function fullName()
    {
        return "{$this->last_name} {$this->first_name}";
    }

}
