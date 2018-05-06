<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function mission() {
        return view('pages.mission');
    }
    public function contact() {
        return view('pages.contact');
    }
    public function help() {
        return view('pages.help');
    }
    public function donations() {
        return view('pages.donations');
    }
    public function login() {
        return view('pages.login');
    }
    public function register() {
        return view('pages.register');
    }
    
}
