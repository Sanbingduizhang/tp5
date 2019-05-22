<?php

namespace app\admin\controller;

use app\common\model\Users;
use app\Repositories\UsersRepository;
use think\Controller;
use think\Request;

class Login extends Controller
{

    public function login(Request $request,UsersRepository $usersRepository)
    {
        $res = $usersRepository->aa();
        dd($res);
        $data = Users::all();
        dd($data);
        $users = $request->only(['name','pwd']);
        dd($users);
//        return $users;
    }
}
