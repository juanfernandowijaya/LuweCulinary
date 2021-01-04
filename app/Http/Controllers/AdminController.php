<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:delete post');
    }
    public function index()
    {
        return 'ok';
    }
}
