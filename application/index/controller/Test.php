<?php
namespace app\index\controller;

class Test
{
    public function index()
    {
        die('sssss');
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
