<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Problem;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    
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

        $phones =Phone::all();
        $suggested = Problem::orderBy(DB::raw('RAND()'))->take(8)->get();
        return view('home', compact("phones",'suggested'));
    }
}
