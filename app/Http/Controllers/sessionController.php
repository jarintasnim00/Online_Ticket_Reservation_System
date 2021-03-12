<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{

     public function loginsession(Request $request)
     {
        $data = $request->input();

        $request->session()->put('user',$data['user']);
       
        return redirect('profile');

     }




    // public function getSessionData(Request $request)
    // {
    //    if($request->session()->has('name'))
    //    {
    //         echo $request->session()->has('name');
    //    }
    //    else
    //    {
    //    	echo "No data in the session";
    //    }
    // }

    // public function storeSessionData(Request $request)
    // {
       
    //    $request->session()->put('name','Jarin');
    //    echo "Data has been added to the session";
    // }

    //  public function deleteSessionData(Request $request)
    // {
       
    //    $request->session()->forget('name');
    //    echo "Data has been removed from the session";
    // }

}
