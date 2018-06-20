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
        $clueCount = 0;
        $completedClueCount = 0;
        $waitCompletedClueCount = 0;
        $newClueCount = 0;
        $waitCompletedCluePageCount = 1;
        return view('home')->with('clueCount', $clueCount)
            ->with('newClueCount', $newClueCount)
            ->with('waitCompletedClueCount', $waitCompletedClueCount)
            ->with('completedClueCount', $completedClueCount)
            ->with('waitCompletedCluePageCount', $waitCompletedCluePageCount);
    }
}
