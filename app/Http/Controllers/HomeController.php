<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('home',['users'=>$users ]);
    }
    
    public function home()
    {
        $message = 'Please check your email to verify your profile';
        return redirect(route('home.index'))->with('message',$message);
    }

}
