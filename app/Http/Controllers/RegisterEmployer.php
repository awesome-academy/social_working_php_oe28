<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterEmployer extends Controller
{
    public function register(Request $request) {
        $companyName = ucfirst($request->get('company_name'));
        $companyNameDB = DB::table('companies')->where('name', $companyName)->first();
        if ($companyNameDB) {
            $companyId = DB::table('companies')->where('name', $companyName)->first()->id;
            DB::table('users')->insert([
                'email' => $request->get('email'),
                'name' => $request->get('name'),
                'password' => Hash::make($request->get('password')),
                'role_id' => config('home.role_id_employer'),
                'company_id' => $companyId,
                'status' => config('controller.status.pending'),
            ]);
            alert()->warning('WarningAlert', trans('signin.warning_login_user'));

            return redirect('login');
        } else {
            DB::table('companies')->insert([
               'name' =>  $companyName
            ]);

            $newCompanyId = DB::table('companies')->where('name', $companyName)->first()->id;
            DB::table('users')->insert([
                'email' => $request->get('email'),
                'name' => $request->get('name'),
                'password' => Hash::make($request->get('password')),
                'role_id' => config('home.role_id_employer'),
                'company_id' => $newCompanyId,
                'status' => config('controller.status.pending'),
            ]);
            alert()->warning('WarningAlert', trans('signin.warning_login_user'));

            return redirect('login');
        }
    }
}
