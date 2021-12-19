<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request){
        if($request->session()->exists('jwt') ) {
            return redirect('/');
        }
        return view('pages.dashboard');
    }


}
