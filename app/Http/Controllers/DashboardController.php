<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Models\User;
use Auth;

class DashboardController extends Controller
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
    public function userByEmail()
    {
        $users = User::all()->where('email',request('email'));
        return view('users.index',['users'=>$users]);
    }
    public function profile()
    {
        $user = auth()->user();
        return view('dashboard.profile',['user'=>$user]);
    }
    public function editPage($id)
    {
        $user = User::find($id);
        
        return view('users.edit',['user'=>$user]);
    }
    public function updateProfile()
    {
        $currentuser = auth()->user();
        $user = User::find($currentuser->id);
        if(request('name')){
            $user->name = request('name');
        }
        if(request('profession')){
            $user->profession = request('profession');
        }
        if(request('qoute')){
            $user->qoute = request('qoute');
        }
        if(request('qoute')){
            $user->qoute = request('qoute');
        }
        if(request('image')){
            $user->image = request('image');
        }
        if(request('age')){
            $user->age = request('age');
        }
        $user->save();
        return redirect(route('dashboard'));
    }
}
