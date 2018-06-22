<?php

namespace App\Http\Controllers;

use App\Repositories\ChannelRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\DrivingClueCreateRequest;
use App\Http\Requests\DrivingClueUpdateRequest;
use App\Repositories\DrivingClueRepository;
use App\Validators\DrivingClueValidator;

/**
 * Class DrivingCluesController.
 *
 * @package namespace App\Http\Controllers;
 */
class DrivingCluesController extends Controller
{
    /**
     * @var DrivingClueRepository
     */
    protected $repository;

    protected $channelRepository ;

    /**
     * DrivingCluesController constructor.
     *
     * @param DrivingClueRepository $repository
     */
    public function __construct(DrivingClueRepository $repository, ChannelRepository $channelRepository)
    {
        $this->repository = $repository;

        $this->channelRepository = $channelRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $drivingClues = $this->repository->with('channel')->paginate($request->input('limit', self::PAGE_LIMIT));
        $channels = $this->channelRepository->all();
        if (request()->wantsJson()) {

            return response()->json($drivingClues);
        }

        return view('drivingClues.index', compact(['drivingClues', 'channels']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  DrivingClueCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws
     */
    public function store(DrivingClueCreateRequest $request)
    {
        try {

            $drivingClue = $this->repository->create($request->all());

            $response = [
                'message' => 'DrivingClue created.',
                'data'    => $drivingClue->toArray(),
            ];



            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidationException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drivingClue = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $drivingClue,
            ]);
        }

        return view('drivingClues.show', compact('drivingClue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drivingClue = $this->repository->find($id);

        return view('drivingClues.edit', compact('drivingClue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  DrivingClueUpdateRequest $request
     * @param  string            $id
     *
     * @return Response|View
     *
     * @throws
     */
    public function update(DrivingClueUpdateRequest $request, $id)
    {
        try {

            $drivingClue = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'DrivingClue updated.',
                'data'    => $drivingClue->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'DrivingClue deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'DrivingClue deleted.');
    }
}
