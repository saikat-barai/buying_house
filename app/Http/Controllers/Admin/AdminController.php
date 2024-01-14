<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // admin register view 
    function admin_register(){
        return view('backend.layouts.admin_register');
    }

    // admin login viwe 
    function admin_login(){
        return view('backend.layouts.admin_login');
    }

    // dashboard view 
    function dashboard(){
        return view('backend.dashboard.dashboard');
    }
}
