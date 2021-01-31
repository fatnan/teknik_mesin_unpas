<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name','admin')->first();
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@unpas.co.id";
        $user->password = bcrypt('admin');
        $user->save();
    }
}
