<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AnswersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
