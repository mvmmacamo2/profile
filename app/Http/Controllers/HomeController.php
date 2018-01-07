<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nivel = $u->nivelacesso;
      $nivel = Auth()->user()->nivelacesso;
      if ($nivel == 'Admin') {
       return view('admin');
     }elseif ($nivel == 'Normal') {
      return view('home');

    }
    
  }
}
