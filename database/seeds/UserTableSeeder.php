<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role_id = DB::table('roles')->where('name', 'admin')->first()->id;
        DB::table('users')->insert([
            'name' => 'hoanglinh',
            'email' => 'linhdz6@gmail.com',
            'password' => bcrypt('123456'),
            'role_id' => $admin_role_id,
            'status' => config('controller.status.active'),
        ]);

        $user_role_id = DB::table('roles')->where('name', 'user')->first()->id;
        factory(User::class, 20)->create(['role_id' => $user_role_id]);

        $employer_role_id = DB::table('roles')->where('name','employer')->first()->id;
        factory(User::class,20)->create(['role_id' => $employer_role_id]);
    }
}
