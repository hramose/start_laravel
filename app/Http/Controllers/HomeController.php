<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('changeLocal');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Changing the app language.
     *
     * @param $lang
     *
     * @return response
     */
    public function changeLocal($lang)
    {
        app()->setLocale($lang);
        session()->put('locale', $lang);

        return back();
    }
}
