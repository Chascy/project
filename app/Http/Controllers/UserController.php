<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function editUser(Request $request){
        $user = User::find($request->id);
        return view('edit-user-page', ['user' => $user]);
    }

    public function updateUser(Request $request){
        $updateUser = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::find($request->id);
        $user->update($updateUser);

        return redirect()->route('editUser', ['id' => $user->id]);
    }
}
