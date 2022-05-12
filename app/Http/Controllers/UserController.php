<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view("back/users.index", compact('users'));
    }

    public function edit(User $user) {
        return view("back/users.edit", compact('user'));
    }

    public function update(Request $request, User $user) {
        $user->role_id = $request->role_id;
        $user->save();

        return redirect()->route("users.index")->with("message", "Successfully updated.");
    }
}
