<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\DrivingSchoolCreateRequest;
use App\Http\Requests\DrivingSchoolUpdateRequest;
use App\Repositories\DrivingSchoolRepository;
use App\Validators\DrivingSchoolValidator;

/**
 * Class DrivingSchoolsController.
 *
 * @package namespace App\Http\Controllers;
 */
class DrivingSchoolsController extends Controller
{
    /**
     * @var DrivingSchoolRepository
     */
    protected $repository;

    /**
     * @var DrivingSchoolValidator
     */
    protected $validator;

    /**
     * DrivingSchoolsController constructor.
     *
     * @param DrivingSchoolRepository $repository
     * @param DrivingSchoolValidator $validator
     */
    public function __construct(DrivingSchoolRepository $repository, DrivingSchoolValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $drivingSchools = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $drivingSchools,
            ]);
        }

        return view('drivingSchools.index', compact('drivingSchools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  DrivingSchoolCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(DrivingSchoolCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $drivingSchool = $this->repository->create($request->all());

            $response = [
                'message' => 'DrivingSchool created.',
                'data'    => $drivingSchool->toArray(),
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
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drivingSchool = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $drivingSchool,
            ]);
        }

        return view('drivingSchools.show', compact('drivingSchool'));
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
        $drivingSchool = $this->repository->find($id);

        return view('drivingSchools.edit', compact('drivingSchool'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  DrivingSchoolUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(DrivingSchoolUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $drivingSchool = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'DrivingSchool updated.',
                'data'    => $drivingSchool->toArray(),
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
                'message' => 'DrivingSchool deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'DrivingSchool deleted.');
    }
}
