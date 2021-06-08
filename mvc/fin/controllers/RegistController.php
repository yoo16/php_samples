<?php
require_once 'Controller.php';

class RegistController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function input()
    {
        $member = Session::load('member');
        if (!$member) {
            $member = new Member();
        }
        include('views/regist/input.php');
    }

    public function confirm()
    {
        echo '確認処理';
    }

    public function result()
    {
        echo '完了処理';
    }
}
