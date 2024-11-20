<?php
require_once 'app/models/User.php';

class LoginController
{
    public function index()
    {
        $user = new User();
        $errors = Session::load('errors');
        Session::clear('errors');
        $user->value = Session::load('posts');

        View::render(
            'login/index',
            [
                'user' => $user,
                'errors' => $errors
            ]
        );
        return;
    }

    public function auth()
    {
        Http::checkPost();

        $user = new User();
        $posts = $user->check($_POST);
        $errors = $user->validate($posts);

        Session::save('posts', $posts);
        Session::save('errors', $errors);
        if ($errors) {
            Http::redirect('./');
        }
        if ($user->auth($posts['email'], $posts['password'])) {
            Http::redirect('../user/');
        } else {
            Http::redirect('./');
        }
    }

    public function logout()
    {
        $user = new User();
        $user->logout();
        Http::redirect('../login/');
    }
}
