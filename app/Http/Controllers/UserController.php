<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function show() {
        $users = User::with('role')->paginate(config('controller.paginate'));

        return view('admin.user_management', compact('users'));
    }

    public function changeUserStatus(Request $request) {
        $user = User::find($request->get('id'));
        if ($user->status === config('controller.status.pending')) {
            $user->status = config('controller.status.active');
            $user->save();
            alert()->success('SuccessAlert', trans('controller.update_success'));

            return redirect()->route('userManagement');
        }
        $user->status = config('controller.status.pending');
        $user->save();
        alert()->success('SuccessAlert', trans('controller.update_success'));

        return redirect()->route('userManagement');
    }

    public function resetPassword(Request $request) {
        $user = User::find($request->get('id'));
        $user->password = Hash::make('12345678');
        $user->save();
        alert()->success('SuccessAlert', trans('controller.reset_success'));

        return redirect()->route('userManagement');
    }
}
