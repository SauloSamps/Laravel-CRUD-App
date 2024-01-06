<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'WELCOME TO A LARAVEL TEST BLOG';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title); //passes values to be read in the page
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function login(){
        return view('pages.login');
    }

    public function register(){
        return view('pages.register');
    }

}
