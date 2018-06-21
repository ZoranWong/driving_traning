<?php

namespace App\Http\Controllers;

use App\Entities\DrivingClue;
use App\Repositories\DrivingClueRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    protected $clueRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DrivingClueRepository $clueRepository)
    {
        $this->middleware('auth');
        $this->clueRepository = $clueRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clueCount = $this->clueRepository->count();
        $completedClueCount = $this->clueRepository->scopeQuery(function (DrivingClue $clue) {
            return $clue->where('status', DrivingClue::SUCCESS_DEVELOP);
        })->count();
        $waitCompletedClueCount = $this->clueRepository->scopeQuery(function (DrivingClue $clue) {
            return $clue->where('status', DrivingClue::WAIT);
        })->count();
        $newClueCount = $this->clueRepository->scopeQuery(function (DrivingClue $clue) {
            return $clue->where('create_at', '>', Carbon::today());
        })->count();
        $waitCompletedCluePageCount = 1;
        return view('home')->with('clueCount', $clueCount)
            ->with('newClueCount', $newClueCount)
            ->with('waitCompletedClueCount', $waitCompletedClueCount)
            ->with('completedClueCount', $completedClueCount)
            ->with('waitCompletedCluePageCount', $waitCompletedCluePageCount);
    }
}
