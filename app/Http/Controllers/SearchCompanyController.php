<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class SearchCompanyController extends Controller
{
    public function getCompany(Request $request)
    {
        return response()->json(
            Company::where('name', 'like', "%" . $request->get('data') . "%")->get()
        );
    }
}
