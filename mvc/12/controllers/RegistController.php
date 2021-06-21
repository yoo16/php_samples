<?php
class RegistController
{

    public function input()
    {
        $member = Session::load('member');
        if (empty($member)) {
            $member = new Member();
        }
        include 'views/regist/input.php';
    }

    public function confirm()
    {
        $member = new Member();
        $member->bind($_POST);
        $member->validate();
        Session::save('member', $member);
        include 'views/regist/confirm.php';
    }

    public function result()
    {
        $member = Session::load('member');
        if (empty($member)) {
            header('Location: input.php');
        } else {
            unset($_SESSION['member']);
            include 'views/regist/result.php';
        }
    }
}
