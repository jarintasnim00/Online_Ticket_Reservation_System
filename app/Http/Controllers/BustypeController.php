<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBustypeRequest;
use App\Http\Requests\UpdateBustypeRequest;
use App\Repositories\BustypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class BustypeController extends AppBaseController
{
    /** @var  BustypeRepository */
    private $bustypeRepository;

    public function __construct(BustypeRepository $bustypeRepo)
    {
        $this->bustypeRepository = $bustypeRepo;
    }

    /**
     * Display a listing of the Bustype.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $bustypes = $this->bustypeRepository->all();

        return view('bustypes.index')
            ->with('bustypes', $bustypes);
    }

    /**
     * Show the form for creating a new Bustype.
     *
     * @return Response
     */
    public function create()
    {
        return view('bustypes.create');
    }

    /**
     * Store a newly created Bustype in storage.
     *
     * @param CreateBustypeRequest $request
     *
     * @return Response
     */
    public function store(CreateBustypeRequest $request)
    {
        $input = $request->all();

        $bustype = $this->bustypeRepository->create($input);

        Flash::success('Bustype saved successfully.');

        return redirect(route('bustypes.index'));
    }

    /**
     * Display the specified Bustype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bustype = $this->bustypeRepository->find($id);

        if (empty($bustype)) {
            Flash::error('Bustype not found');

            return redirect(route('bustypes.index'));
        }

        return view('bustypes.show')->with('bustype', $bustype);
    }

    /**
     * Show the form for editing the specified Bustype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bustype = $this->bustypeRepository->find($id);

        if (empty($bustype)) {
            Flash::error('Bustype not found');

            return redirect(route('bustypes.index'));
        }

        return view('bustypes.edit')->with('bustype', $bustype);
    }

    /**
     * Update the specified Bustype in storage.
     *
     * @param int $id
     * @param UpdateBustypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBustypeRequest $request)
    {
        $bustype = $this->bustypeRepository->find($id);

        if (empty($bustype)) {
            Flash::error('Bustype not found');

            return redirect(route('bustypes.index'));
        }

        $bustype = $this->bustypeRepository->update($request->all(), $id);

        Flash::success('Bustype updated successfully.');

        return redirect(route('bustypes.index'));
    }

    /**
     * Remove the specified Bustype from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bustype = $this->bustypeRepository->find($id);

        if (empty($bustype)) {
            Flash::error('Bustype not found');

            return redirect(route('bustypes.index'));
        }

        $this->bustypeRepository->delete($id);

        Flash::success('Bustype deleted successfully.');

        return redirect(route('bustypes.index'));
    }
}
