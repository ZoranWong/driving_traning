<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ChannelCreateRequest;
use App\Http\Requests\ChannelUpdateRequest;
use App\Repositories\ChannelRepository;

/**
 * Class ChannelsController.
 *
 * @package namespace App\Http\Controllers;
 */
class ChannelsController extends Controller
{
    /**
     * @var ChannelRepository
     */
    protected $repository;

    /**
     * ChannelsController constructor.
     *
     * @param ChannelRepository $repository
     * @param ChannelValidator $validator
     */
    public function __construct(ChannelRepository $repository)
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
        $channels = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $channels,
            ]);
        }

        return view('channels.index', compact('channels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ChannelCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws
     */
    public function store(ChannelCreateRequest $request)
    {
        try {
            $data = $request->all();
            if($data['url']) {
                $arr = parse_url($data['url']);
                $data['url'] = "{$arr['scheme']}://{$arr['host']}?channel={$data['slug']}";
            }

            $channel = $this->repository->create($data);

            $response = [
                'message' => 'Channel created.',
                'data'    => $channel->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {
            throw $e;
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
        $channel = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $channel,
            ]);
        }

        return view('channels.show', compact('channel'));
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
        $channel = $this->repository->find($id);

        return view('channels.edit', compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ChannelUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws
     */
    public function update(ChannelUpdateRequest $request, $id)
    {
        try {

            $data = $request->all();
            if($data['url']) {
                $arr = parse_url($data['url']);
                $data['url'] = "{$arr['scheme']}://{$arr['host']}?channel={$data['slug']}";
            }

            $channel = $this->repository->update($data, $id);

            $response = [
                'message' => 'Channel updated.',
                'data'    => $channel->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {
            throw $e;
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
                'message' => 'Channel deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Channel deleted.');
    }
}
