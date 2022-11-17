<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function dashboard()
    {
        $user = auth()->user();
        return view('dashboard.dashboard',['user'=>$user]);
    }
    public function users()
    {
        $users = User::all();
        $user = auth()->user();
        return view('users.index',['users'=>$users,'current_user'=>$user ]);
    }
}
