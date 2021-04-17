<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBus_ownerRequest;
use App\Http\Requests\UpdateBus_ownerRequest;
use App\Repositories\Bus_ownerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Bus_ownerController extends AppBaseController
{
    /** @var  Bus_ownerRepository */
    private $busOwnerRepository;

    public function __construct(Bus_ownerRepository $busOwnerRepo)
    {
        $this->busOwnerRepository = $busOwnerRepo;
    }

    /**
     * Display a listing of the Bus_owner.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $busOwners = $this->busOwnerRepository->all();

        return view('bus_owners.index')
            ->with('busOwners', $busOwners);
    }

    /**
     * Show the form for creating a new Bus_owner.
     *
     * @return Response
     */
    public function create()
    {
        return view('bus_owners.create');
    }

    /**
     * Store a newly created Bus_owner in storage.
     *
     * @param CreateBus_ownerRequest $request
     *
     * @return Response
     */
    public function store(CreateBus_ownerRequest $request)
    {
        $input = $request->all();

        $busOwner = $this->busOwnerRepository->create($input);

        Flash::success('Bus Owner saved successfully.');

        return redirect(route('busOwners.index'));
    }

    /**
     * Display the specified Bus_owner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $busOwner = $this->busOwnerRepository->find($id);

        if (empty($busOwner)) {
            Flash::error('Bus Owner not found');

            return redirect(route('busOwners.index'));
        }

        return view('bus_owners.show')->with('busOwner', $busOwner);
    }

    /**
     * Show the form for editing the specified Bus_owner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $busOwner = $this->busOwnerRepository->find($id);

        if (empty($busOwner)) {
            Flash::error('Bus Owner not found');

            return redirect(route('busOwners.index'));
        }

        return view('bus_owners.edit')->with('busOwner', $busOwner);
    }

    /**
     * Update the specified Bus_owner in storage.
     *
     * @param int $id
     * @param UpdateBus_ownerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBus_ownerRequest $request)
    {
        $busOwner = $this->busOwnerRepository->find($id);

        if (empty($busOwner)) {
            Flash::error('Bus Owner not found');

            return redirect(route('busOwners.index'));
        }

        $busOwner = $this->busOwnerRepository->update($request->all(), $id);

        Flash::success('Bus Owner updated successfully.');

        return redirect(route('busOwners.index'));
    }

    /**
     * Remove the specified Bus_owner from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $busOwner = $this->busOwnerRepository->find($id);

        if (empty($busOwner)) {
            Flash::error('Bus Owner not found');

            return redirect(route('busOwners.index'));
        }

        $this->busOwnerRepository->delete($id);

        Flash::success('Bus Owner deleted successfully.');

        return redirect(route('busOwners.index'));
    }
}
