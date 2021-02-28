<?php

namespace App\Http\Controllers;

use App\Models\Booked_seat;
use App\Models\Businfo;
use App\Models\Bustype;
use App\Models\Paymentdetail;
use App\Models\Trip_detail;
use DateTime;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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

        $time_over_array = array();
        $booked_list = array();
        $new_result = array();

        $over_booked_data = booked_seat::Where('status', '=', 'reserved')
        ->Where('bus_journey_date', '=', $date)
        ->get();

        $date_to = Carbon::now();

        for ($x = 0; $x < $over_booked_data->count(); $x++) {
            $diff_in_minutes = $date_to->diffInMinutes($over_booked_data[$x]->created_at);
            array_push($time_over_array,$diff_in_minutes);
            if($diff_in_minutes>30){
                booked_seat::where('id',$over_booked_data[$x]->id)->delete(); 
            }
             
        }

        // dd($time_over_array);

        for ($x = 0; $x < $result->count(); $x++) {
          $booked_data = booked_seat::where('businfo_id', '=', $result[$x]->id)
          ->Where('bus_journey_date', '=', $date)
          ->where(function($q) {
            $q->orWhere('status', '=', 'reserved')
            ->orWhere('status', '=', 'confirmed');
         })
          ->get();
          array_push($booked_list,$booked_data);
          array_push($new_result,[
            "bus_info" => $result[$x],
            // "bus_info" => json_decode(json_encode($result[$x]), true),
            "booked_list" => $booked_data
            
          ]);
        }

        //dd($new_result[1]['bus_info']);

        $bustype = Bustype::all();

        // dd($result);
        return view('user.showsearch', ['result' => $new_result, 'data' => $request, 'bustype' => $bustype,"bus_journey_date" => $date]);
    }

    public function seatView(Request $request)
    {
        $bus_id = $request->bus_id;
        
        //  dd($day);

        $booked_data = booked_seat::where('businfo_id', '=', $bus_id)->get();
        // dd($result);
        return view('user.showsearch', ['booked_data' => $booked_data, 'data' => $request]);
    }

    

    public function add_data(Request $request)
    {
        
        $all_status = [
            'reserved',
            'confirmed',
            'canceled'
        ];

        if ($request->ismethod('post')) {
 

            $data = $request['data_list'];
            $demo_user_id = Str::random(100);
            $save_status = 'error';
            for ($x = 0; $x < count($data); $x++) {
                $bookedSeat = new booked_seat;
                $bookedSeat->status = $all_status[0];
                $bookedSeat->seat_name = $data[$x];
                $bookedSeat->businfo_id = $request['bus_id'];
                $bookedSeat->boarding_point = $request['boarding_point'];
                $bookedSeat->bus_journey_date = $request['bus_journey_date'];
                $bookedSeat->demo_user_id = $demo_user_id;
                $bookedSeat->updated_at = Carbon::now()->toDateTimeString();
                $bookedSeat->save();
                $save_status = 'success';
            }

            if($save_status == 'success'){
                // return redirect('/booking')->with('flash_message_success', 'Booked-seat successfully!!');
                // $r_url = route('bokking.get');
                $r_url = route('booking.get', ['data_list' =>json_encode($data), 'bus_id' => $request['bus_id'],'boarding_point'=>$request['boarding_point'],'demo_user_id'=>$demo_user_id]);
                return response()->json(['success'=>'successfully reserved seat','data'=>$data,'redirect'=>$r_url]);
            }else{
                return response()->json(['error'=>'Traffic Problem Happend','data'=>$data]);
            }
            
            // return redirect('/booking')->with('flash_message_success', 'Training has been added successfully!!');
            // return response()->json(['error'=>'Got Simple Ajax Request.','data'=>$data]);
            

            

            
            // $tripinfo = new Trip_detail;
            // $tripinfo->name = $request['name'];
            // $tripinfo->gender = $request['gender'];
            // $tripinfo->phn = $request['phn'];
            // $tripinfo->email = $request['email'];

            // $tripinfo->save();

            // return redirect('/booking')->with('flash_message_success', 'Training has been added successfully!!');
        }

        return view('user.bookingbus');

    }

    public function booked_seat(Request $request)
    {

        // $seat_booked = new Booked_seat;
        // $data = $request['data_list'];

        // dd($data);
        // $seat_booked->businfo_id = $request['businfo_id'];
        // $seat_booked->date = $request['date'];
        // $seat_booked->time = $request['time'];
        // $seat_booked->status = $request['status'];

        // $seat_booked->save();
        return redirect('/booking')->with('flash_message_success', 'Booked-seat successfully!!');

      return view('user.bookingbus');

    }

    public function payment_now(Request $request)
    {
        if ($request->ismethod('post')) {
            
            $tripinfo = new Trip_detail;
            $tripinfo->name = $request['name'];
            $tripinfo->gender = $request['gender'];
            $tripinfo->phn = $request['pmobile'];
            $tripinfo->email = $request['email'];
            $tripinfo->demo_user_id = $request['demo_user_id'];

            $tripinfo->save();
            return view('user.payment',['data' => $request]);


        }
        return view('user.payment',['data' => $request]);
        

    }

    public function add_payment(Request $request)
    {
        $all_status = [
            'reserved',
            'confirmed',
            'canceled'
        ];

        if ($request->ismethod('post')) {
            $payment = new Paymentdetail;
            $payment->payment_number = $request['payment_number'];
            $payment->demo_user_id = $request['demo_user_id'];
    
            $payment->save();

            $over_booked_data = booked_seat::Where('status', '=', 'reserved')
            ->Where('demo_user_id', '=', $request['demo_user_id'])
            ->get();

            $date_to = Carbon::now();

            for ($x = 0; $x < $over_booked_data->count(); $x++) {
                $diff_in_minutes = $date_to->diffInMinutes($over_booked_data[$x]->created_at);
                // array_push($time_over_array,$diff_in_minutes);
                if($diff_in_minutes<=30){      
                    DB::table('booked_seats')
                    ->Where('status', '=', 'reserved')
                    ->Where('demo_user_id', '=', $request['demo_user_id'])
                    ->update(['status' => $all_status[1]]);
                   
                }
                
            }

            return redirect('/bus')->with('flash_message_success', 'Booked-seat successfully!!');
        }
        return view('user.index',['data' => $request]);
      

    }
    public function after_booking(Request $request,$data_list,$bus_id,$boarding_point,$demo_user_id) {

        $data = json_decode($request['data_list'], true); 
        $bus_id = $request['bus_id'];
        $boarding_point = $request['boarding_point'];
        $demo_user_id = $request['demo_user_id'];
        // dd($demo_user_id);
        if ($request->ismethod('post')) {
            
            $tripinfo = new Trip_detail;
            $tripinfo->name = $request['name'];
            $tripinfo->gender = $request['gender'];
            $tripinfo->phn = $request['phn'];
            $tripinfo->email = $request['email'];
            $tripinfo->demo_user_id = $request['demo_user_id'];

            $tripinfo->save();
        }

        
        // dd($data );
        // return view('user.bookingbus');
        return view('user.bookingbus', ['data' => $request]);
    }

}
