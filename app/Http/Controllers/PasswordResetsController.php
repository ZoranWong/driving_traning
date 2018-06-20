<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PasswordResetCreateRequest;
use App\Http\Requests\PasswordResetUpdateRequest;
use App\Repositories\PasswordResetRepository;
use App\Validators\PasswordResetValidator;

/**
 * Class PasswordResetsController.
 *
 * @package namespace App\Http\Controllers;
 */
class PasswordResetsController extends Controller
{
    /**
     * @var PasswordResetRepository
     */
    protected $repository;

    /**
     * @var PasswordResetValidator
     */
    protected $validator;

    /**
     * PasswordResetsController constructor.
     *
     * @param PasswordResetRepository $repository
     * @param PasswordResetValidator $validator
     */
    public function __construct(PasswordResetRepository $repository, PasswordResetValidator $validator)
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
        $passwordResets = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $passwordResets,
            ]);
        }

        return view('passwordResets.index', compact('passwordResets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PasswordResetCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(PasswordResetCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $passwordReset = $this->repository->create($request->all());

            $response = [
                'message' => 'PasswordReset created.',
                'data'    => $passwordReset->toArray(),
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
        $passwordReset = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $passwordReset,
            ]);
        }

        return view('passwordResets.show', compact('passwordReset'));
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
        $passwordReset = $this->repository->find($id);

        return view('passwordResets.edit', compact('passwordReset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PasswordResetUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(PasswordResetUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $passwordReset = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'PasswordReset updated.',
                'data'    => $passwordReset->toArray(),
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
                'message' => 'PasswordReset deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'PasswordReset deleted.');
    }
}
