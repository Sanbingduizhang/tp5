<?php

use think\migration\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    protected $table = 'users';

    public function run()
    {
        $data =
            [
                'username' => 'admin',
                'password' => '123456',
                'login_status' => '1',
                'login_code' => '123456',
                'last_login_ip' => '127.0.0.1',
                'last_login_time' => date('Y-m-d H:i:s'),
                'is_del' => 1,
                'create_time' => date('Y-m-d H:i:s'),
                'update_time' => date('Y-m-d H:i:s'),
            ];
        $this->table($this->table)->insert($data)->save();
    }
}