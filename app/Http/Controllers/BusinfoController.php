<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBusinfoRequest;
use App\Http\Requests\UpdateBusinfoRequest;
use App\Repositories\BusinfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Bustype;
use Flash;
use Response;

class BusinfoController extends AppBaseController
{
    /** @var  BusinfoRepository */
    private $businfoRepository;

    public function __construct(BusinfoRepository $businfoRepo)
    {
        $this->businfoRepository = $businfoRepo;
    }

    /**
     * Display a listing of the Businfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $businfos = $this->businfoRepository->all();

        return view('businfos.index')
            ->with('businfos', $businfos);
    }

    /**
     * Show the form for creating a new Businfo.
     *
     * @return Response
     */
    public function create()
    {
         $places = Bustype::all();
            
        return view('businfos.create',compact('places'));

    }

    /**
     * Store a newly created Businfo in storage.
     *
     * @param CreateBusinfoRequest $request
     *
     * @return Response
     */
    public function store(CreateBusinfoRequest $request)
    {
        $input = $request->all();

        $businfo = $this->businfoRepository->create($input);

        Flash::success('Businfo saved successfully.');

        return redirect(route('businfos.index'));
    }

    /**
     * Display the specified Businfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $businfo = $this->businfoRepository->find($id);

        if (empty($businfo)) {
            Flash::error('Businfo not found');

            return redirect(route('businfos.index'));
        }

        return view('businfos.show')->with('businfo', $businfo);
    }

    /**
     * Show the form for editing the specified Businfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $businfo = $this->businfoRepository->find($id);
        $places = Bustype::all();

        if (empty($businfo)) {
            Flash::error('Businfo not found');

            return redirect(route('businfos.index'));
        }

        
        return view('businfos.edit',compact('businfo','places'));
    }

    /**
     * Update the specified Businfo in storage.
     *
     * @param int $id
     * @param UpdateBusinfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBusinfoRequest $request)
    {
        $businfo = $this->businfoRepository->find($id);

        if (empty($businfo)) {
            Flash::error('Businfo not found');

            return redirect(route('businfos.index'));
        }

        $businfo = $this->businfoRepository->update($request->all(), $id);

        Flash::success('Businfo updated successfully.');

        return redirect(route('businfos.index'));
    }

    /**
     * Remove the specified Businfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $businfo = $this->businfoRepository->find($id);

        if (empty($businfo)) {
            Flash::error('Businfo not found');

            return redirect(route('businfos.index'));
        }

        $this->businfoRepository->delete($id);

        Flash::success('Businfo deleted successfully.');

        return redirect(route('businfos.index'));
    }
}
