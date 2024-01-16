<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        return view('frontend.index');
    }
    
    // frontend about view 
    function about(){
        return view('frontend.pages.about');
    }


    // service  view 
    function service(){
        return view('frontend.pages.service');
    }


    // products  view 
    function products(){
        return view('frontend.pages.products');
    }


    // mission_and_vission  view 
    function mission_and_vission(){
        return view('frontend.pages.mission_and_vission');
    }


    // contact  view 
    function contact(){
        return view('frontend.pages.contact');
    }
}
