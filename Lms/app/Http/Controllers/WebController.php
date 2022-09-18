<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        return view('home');
    }

    public function login(){
        return view('auth.login');
    }

    public function courses(){
        return view('course');
    }

    public function register(){
        return view('auth.register');
    }

    public function profile(){
        return view('profile');
    }

    public function contactUs(){
        return view('contact');
    }

    public function aboutUs(){
        return view('about');
    }

    public function update(){
        return view('update');
    }

    public function watchVideo (){
        return view('watchVideo');
    }

    public function teachersProfile(){
        return view('teacherProfile');
    }

    public function playList(){
        return view('playList');
    }
}
