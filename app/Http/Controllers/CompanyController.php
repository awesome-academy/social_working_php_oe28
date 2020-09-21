<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function show($id)
    {
        $followed = false;
        $searchCompany = Company::with('users')->findOrFail($id);
        if (Auth::check()) {
            foreach ($searchCompany->users as $user) {
                if ($user->id === Auth::id()) {
                    $followed = true;
                    break;
                }
            }
        }

        return view('companyInfo', compact('searchCompany', 'followed'));
    }

    public function follow(Request $request)
    {
        if (Auth::check()) {
            DB::table('company_user')->insert([
                'company_id' => $request->get('id'),
                'user_id' => Auth::id(),
            ]);

            return redirect()->back();
        } else {
            return redirect()->route('login');
        }
    }
}
