<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use App\Models\Token;


class AuthController extends Controller
{
  
    public function login()
    {
        return view('Front.Sign-in');
    }

  

    
    public function register()
    {
        return view('Front.sign-up');
    }
    
}
