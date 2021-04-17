<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTripcostRequest;
use App\Http\Requests\UpdateTripcostRequest;
use App\Repositories\TripcostRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Businfo;
use App\Models\Tripcost;
use App\Models\Booked_seat;
use Flash;
use Response;

class TripcostController extends AppBaseController
{
    /** @var  TripcostRepository */
    private $tripcostRepository;

    public function __construct(TripcostRepository $tripcostRepo)
    {
        $this->tripcostRepository = $tripcostRepo;
    }

    /**
     * Display a listing of the Tripcost.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
       // $tripcosts = $this->tripcostRepository->all();
        $tripCost = Tripcost::all();
       // dd($tripCost->bus_info->name);

        return view('tripcosts.index',compact('tripCost'));
            
    }

    /**
     * Show the form for creating a new Tripcost.
     *
     * @return Response
     */
    public function create()
    {
         $buses = Businfo::all();
         // $bookseat = Booked_seat::all();
            

             $bookseat = DB::table('businfos')
            ->join('booked_seats', 'businfos.id', '=', 'booked_seats.businfo_id')
            ->select(['booked_seats.*', DB::raw('COUNT(booked_seats.businfo_id) as total_sales')])
            ->groupBy('businfos.id')
            ->get();
            
        return view('tripcosts.create',compact('buses','bookseat'));
       
    }

    /**
     * Store a newly created Tripcost in storage.
     *
     * @param CreateTripcostRequest $request
     *
     * @return Response
     */
    public function store(CreateTripcostRequest $request)
    {
        $input = $request->all();

        $tripcost = $this->tripcostRepository->create($input);

        Flash::success('Tripcost saved successfully.');

        return redirect(route('tripcosts.index'));
    }

    /**
     * Display the specified Tripcost.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tripcost = $this->tripcostRepository->find($id);

        if (empty($tripcost)) {
            Flash::error('Tripcost not found');

            return redirect(route('tripcosts.index'));
        }

        return view('tripcosts.show')->with('tripcost', $tripcost);
    }

 public function show00($id)
    {
        $tripcost = $this->tripcostRepository->find($id);

         $bookedseats = DB::table('businfos')
            ->join('booked_seats', 'businfos.id', '=', 'booked_seats.businfo_id')
            ->select(['businfos.*', 'booked_seats.bus_journey_date', DB::raw('COUNT(booked_seats.seat_name) as total_sales')])
            ->groupBy('businfos.id')
            ->get();

          // dd($bookedseats);


        if (empty($tripcost)) {
            Flash::error('Tripcost not found');

            return redirect(route('tripcosts.index'));
        }

        // return view('report')->with('tripcost', $tripcost);

          return view('report',compact('tripcost','bookedseats'));
    }





    /**
     * Show the form for editing the specified Tripcost.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tripcost = $this->tripcostRepository->find($id);

        if (empty($tripcost)) {
            Flash::error('Tripcost not found');

            return redirect(route('tripcosts.index'));
        }

        return view('tripcosts.edit')->with('tripcost', $tripcost);
    }

    /**
     * Update the specified Tripcost in storage.
     *
     * @param int $id
     * @param UpdateTripcostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTripcostRequest $request)
    {
        $tripcost = $this->tripcostRepository->find($id);

        if (empty($tripcost)) {
            Flash::error('Tripcost not found');

            return redirect(route('tripcosts.index'));
        }

        $tripcost = $this->tripcostRepository->update($request->all(), $id);

        Flash::success('Tripcost updated successfully.');

        return redirect(route('tripcosts.index'));
    }

    /**
     * Remove the specified Tripcost from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tripcost = $this->tripcostRepository->find($id);

        if (empty($tripcost)) {
            Flash::error('Tripcost not found');

            return redirect(route('tripcosts.index'));
        }

        $this->tripcostRepository->delete($id);

        Flash::success('Tripcost deleted successfully.');

        return redirect(route('tripcosts.index'));
    }



//     public function bdata1(){
//         $data =  $_GET["date"];
//         $product = Tripcost::where([
//             ["businfo_id","=",$data]
//         ])->get();

//         $dat = '';
//         foreach ($product as $d){
//             $dat.='  <option value="'.$d->bookseat_id.'">'.$d->bookseat_id.'</option>';

// }

//         echo  $dat;

//     }


    
}
