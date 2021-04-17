<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booked_seat;


class StatusController extends Controller
{
     public function view()
    {
       $booked_seats = Booked_seat::all();

        return view('Booked_seat.show')->with('booked_seats', $booked_seats);
    }


    public function ticket_sold_status()
    {
       $booked_seats = Booked_seat::all();

        return view('Booked_seat.ticket_sold_status')->with('booked_seats', $booked_seats);
    }


    public function daily_sales_status()
    {
       $booked_seats = Booked_seat::all();

        return view('Booked_seat.daily_sales_status')->with('booked_seats', $booked_seats);
    }


    public function payment_report()
    {
       $booked_seats = Booked_seat::all();

        return view('Booked_seat.payment_report')->with('booked_seats', $booked_seats);
  
    }






}
