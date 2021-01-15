<?php

namespace app\index\controller;

use app\index\model\Users;
use think\Controller;

class News extends Controller
{
    public function add()
    {
        $user = new Users();
        $user->username = '马云666';
        $user->password = md5(123456);
        $user->country = '中国';
        dump($user->save());
    }

    public function edit()
    {

    }

    public function delete()
    {
    }

    public function query()
    {
        $user = Users::get(2);
        dump($user->country);
    }
}
