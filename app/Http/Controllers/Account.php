<?php

namespace App\Http\Controllers;

use App\Role;

use Illuminate\Http\Request;

class Account extends Controller
{
    public function index()
    {
        return view('account/dashboard');
    }
    public function test()
    {
        return view('account/home');
    }
}
