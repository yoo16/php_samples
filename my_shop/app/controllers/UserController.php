<?php
require_once 'app/models/User.php';

class UserController
{
    public $authUser;

    public function __construct()
    {
        $this->authUser = new User();
        $this->authUser->authUser();
        if (empty($this->authUser->value['id'])) {
            Http::redirect('../login/');
        }
    }

    public function index()
    {
        View::render(
            'user/index',
            ['user' => $this->authUser]
        );
    }
}
