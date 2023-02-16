<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        //return view('Shop.home');
        return view('index');
    }

    public function indexServices()
    {
        return view('Shop.services');
    }

    public function indexServiceDetail()
    {
        return view('Shop.service-detail');
    }

    public function indexAdmin()
    {
        return view('home');
    }

    public function aAdmin(){
        return view('admin-layout');
    }

    public function logout()
    {
        Auth::logout();
        return view('home');
    }
}
