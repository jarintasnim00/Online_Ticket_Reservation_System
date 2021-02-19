<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Businfo;
use App\Models\Bustype;
use Carbon\Carbon;
use DateTime;
use DB;
use App\Models\Trip_detail;
use App\Models\Booked_seat;
use App\Models\Paymentdetail;
class BusController extends Controller
{

  public function index()
  {
    return view('user.index');
  }

    public function search(Request $request)
  {
    $leaving_from = $request->leaving_from;
    $going_to = $request->going_to;
     $date = $request->date;
     $d = new DateTime($date);
     $day = $d->format('l');
   //  dd($day);


    $result = Businfo::where('leaving_from', '=', $leaving_from)
      ->where('going_to', '=', $going_to)
      ->where('day', '=', $day)
      ->get();

      //dd($result);

     $bustype = Bustype::all();

  
    // dd($result);
    return view('user.showsearch', ['result' => $result, 'data' => $request, 'bustype' => $bustype]);
  }


  
    public function add_data(Request $request){

    	
            $tripinfo = new Trip_detail;
            $tripinfo->name = $request['name'];
            $tripinfo->gender = $request['gender'];
            $tripinfo->phn = $request['phn'];
            $tripinfo->email = $request['email'];
           
            

            $tripinfo->save();
            return redirect('/booking')->with('flash_message_success','Training has been added successfully!!');

        
       
            return view('user.bookingbus');

    }



     public function booked_seat(Request $request){

      
            $seat_booked = new Booked_seat;
            $seat_booked->businfo_id = $request['businfo_id'];
            $seat_booked->date = $request['date'];
            $seat_booked->time = $request['time'];
            $seat_booked->status = $request['status'];
           
            

            $seat_booked->save();
            return redirect('/booking')->with('flash_message_success','Booked-seat successfully!!');

        
       
            return view('user.bookingbus');

    }


     public function payment(Request $request){

            return view('user.payment');

    }

    public function add_payment(Request $request){

           
                     $payment = new Paymentdetail;
            $payment->payment_number = $request['payment_number'];
            $payment->save();
            return redirect('/booking/bus/pay-now')->with('flash_message_success','Booked-seat successfully!!');

        
       
            return view('user.payment');


    }


}
