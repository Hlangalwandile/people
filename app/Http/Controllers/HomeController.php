<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }
    
    public function home()
    {
        $message = 'Please check your email to verify your profile';
        return redirect(route('home.index'))->with('message',$message);
    }

}
