<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        $users = User::whereNOTNULL('email_verified_at')->get();
        if($users){
            return view('home',['users'=>$users ]);
        }else{
            return view('home');
        }
        
    }
    
    public function home()
    {
        $message = 'Please check your email to verify your profile';
        return redirect(route('home.index'))->with('message',$message);
    }

}
