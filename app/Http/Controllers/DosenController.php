<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public static function login(){
        return view('dosen.auth.login');
    }

    public static function dashboard(){
        return view('dosen.dashboard.index');
    }
}
