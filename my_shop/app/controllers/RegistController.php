<?php
require_once 'app/models/User.php';

class RegistController
{
    public function index()
    {
        $user = Session::load('user');
        $errors = Session::load('errors');
        Session::clear('errors');

        View::render(
            'regist/index',
            [
                'user' => $user,
                'errors' => $errors
            ]
        );
    }

    public function confirm()
    {
        Http::checkPost();

        $user = new User();
        $posts = $user->check($_POST);
        $errors = $user->validateRegist($posts);

        Session::save('user', $posts);
        Session::save('errors', $errors);

        if ($errors) {
            Http::redirect('./');
        }

        View::render(
            'regist/confirm',
            [
                'user' => $posts,
            ]
        );
    }

    public function result()
    {
        if (Session::load('user')) {
            Session::clear('user');
        } else {
            Http::redirect('./');
        }
        View::render('regist/result');
    }
}
