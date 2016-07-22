<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PicCreateRequest;
use App\Http\Requests\PicUpdateRequest;
use App\Repositories\PicRepository;
use App\Validators\PicValidator;


class PicsController extends Controller
{

    /**
     * @var PicRepository
     */
    protected $repository;

    /**
     * @var PicValidator
     */
    protected $validator;

    public function __construct(PicRepository $repository, PicValidator $validator)
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
        $pics = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $pics,
            ]);
        }

        return view('pics.index', compact('pics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PicCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PicCreateRequest $request)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $pic = $this->repository->create($request->all());

            $response = [
                'message' => 'Pic created.',
                'data'    => $pic->toArray(),
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
        $pic = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $pic,
            ]);
        }

        return view('pics.show', compact('pic'));
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

        $pic = $this->repository->find($id);

        return view('pics.edit', compact('pic'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  PicUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     */
    public function update(PicUpdateRequest $request, $id)
    {

        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $pic = $this->repository->update($id, $request->all());

            $response = [
                'message' => 'Pic updated.',
                'data'    => $pic->toArray(),
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
                'message' => 'Pic deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Pic deleted.');
    }
}
