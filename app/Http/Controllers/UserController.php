<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Carbon\Carbon;

class UserController extends Controller
{
     public function index()
    {
        $users = User::whereNull('approved_at')->get();

        return view('users', compact('users'));
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => Carbon::now()]);

        return redirect()->route('admin.users.index')->withMessage('Novi admin uspjesno dodan');
    }

}
