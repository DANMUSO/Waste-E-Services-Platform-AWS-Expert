<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function sellers()
    {
        $user = User::paginate(10);
        return view('sellers', compact('user'));
    }
    public function premium()
    {
        $user = User::paginate(10);
        return view('premium');
    }
    public function bidders()
    {
        $user = User::paginate(10);
        return view('bidders', compact('user'));
    }
    public function sms()
    {
        return view('sms');
    }
    public function products()
    {
        return view('products');
    }

    public function landingpage()
    {
        return view('home');
    }
}