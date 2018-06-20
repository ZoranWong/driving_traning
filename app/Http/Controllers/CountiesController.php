<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\CountyCreateRequest;
use App\Http\Requests\CountyUpdateRequest;
use App\Repositories\CountyRepository;
use Illuminate\View\View;

/**
 * Class CountiesController.
 *
 * @package namespace App\Http\Controllers;
 */
class CountiesController extends Controller
{
    /**
     * @var CountyRepository
     */
    protected $repository;

    /**
     * CountiesController constructor.
     *
     * @param CountyRepository $repository
     */
    public function __construct(CountyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counties = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $counties,
            ]);
        }

        return view('counties.index', compact('counties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CountyCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws
     */
    public function store(CountyCreateRequest $request)
    {
        try {
            $county = $this->repository->create($request->all());

            $response = [
                'message' => 'County created.',
                'data'    => $county->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {
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
        $county = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $county,
            ]);
        }

        return view('counties.show', compact('county'));
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
        $county = $this->repository->find($id);

        return view('counties.edit', compact('county'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CountyUpdateRequest $request
     * @param  string            $id
     *
     * @return View|Response
     *
     * @throws
     */
    public function update(CountyUpdateRequest $request, $id)
    {
        try {
            $county = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'County updated.',
                'data'    => $county->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {

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
                'message' => 'County deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'County deleted.');
    }
}
