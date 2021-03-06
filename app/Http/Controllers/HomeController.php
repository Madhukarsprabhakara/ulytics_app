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
        $this->middleware('auth')->except(['investments']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('ulytics_views.index_v2');
    }
    public function dashboard()
    {
        return view('ulytics_views.dashboardv1');
    }
    public function investments(Request $request)
    {
        $data=$request->all();
        return $data;
    }
}
