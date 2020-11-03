<?php
namespace app\index\controller;

use think\Config;

class Index
{
    public function index()
    {
        Config::set('amqp.conn','I ma home3');
        dump(Config::get("amqp.conn"));
    }

    public function indexShow()
    {
        echo '123';
    }
}
