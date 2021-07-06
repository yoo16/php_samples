<?php
class AdminController
{

    public function user_list()
    {
        $member = new Member();
        $member->load();
        include 'views/admin/user_list.php';
    }

}
