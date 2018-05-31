<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Menu;

class AdminController extends Controller
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
//        dd(Menu::menus());
        return view('admin::index');
    }
}
