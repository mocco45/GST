<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\staff;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $staff = staff::count();
        $posts = post::count();
        return view('adminDash' ,['staffCount' => $staff, 'postsCount' => $posts]);
    }
}
