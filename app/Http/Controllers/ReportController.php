<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booked_seat;
use App\Models\Tripcost;
use PDF;

class ReportController extends Controller
{
    
    // public function generatePDF()
    // {
    //     // $data = [
    //     //     'title' => 'Welcome to ItSolutionStuff.com',
    //     //     'date' => date('m/d/Y')
    //     // ];
    //     $tripCost =[ 
    //             Tripcost::all()
    //           ];
          
    //     $pdf = PDF::loadView('tripcosts.show', $tripCost);
    
    //     return $pdf->download('Tripcost.pdf');
    // }
    



     public function report_generate()
    {

    	// $booked_seats = Booked_seat::all();
      
     //        // $bookedseats = DB::table('businfos')
     //        // ->join('booked_seats', 'businfos.id', '=', 'booked_seats.businfo_id')
     //        // ->select(['businfos.*', 'booked_seats.bus_journey_date', DB::raw('COUNT(booked_seats.seat_name) as total_sales')])
     //        // ->groupBy('businfos.id')
     //        // ->get();
  

     //     return view('report')->with('booked_seats', $booked_seats);

    	return view ('report');
    }


}
