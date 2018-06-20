<?php

namespace App\Http\Controllers;

use App\Entities\DrivingClue;
use App\Http\Requests\ClueCreateRequest;

class ClueController extends Controller
{
    //
    public function create(ClueCreateRequest $request)
    {
        $result = DrivingClue::create($request->all());
        if($result) {
            return response()->json([
                'status' => 'OK'
            ]);
        }else{
            return response()->json([
                'status' => 'ERROR'
            ]);
        }
    }

    public function index()
    {

    }
}
