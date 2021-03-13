<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use phpDocumentor\Reflection\PseudoTypes\False_;
use Illuminate\Support\Facades\Cookie;


class sessionController extends Controller
{

     public function loginsession(Request $request)
     {
        $data = $request->input();

        $request->session()->put('user',$data['user']);
       
        return redirect('profile');

     }




    public static function getSessionData(Request $request)
    {
       if($request->session()->has('demo_user_id'))
       {
            return $request->session()->get('demo_user_id');
       }
       else
       {
       	return False;
       }
    }
    public static function getGlobalSessionData()
    {
       if(session()->has('demo_user_id'))
       {
            return session('demo_user_id');
       }
       else
       {
       	return False;
       }
    }

    public static function storeSessionData(Request $request,$data)
    {
       
       $request->session()->put('demo_user_id',$data);
      
    }

    //  public function deleteSessionData(Request $request)
    // {
       
    //    $request->session()->forget('name');
    //    echo "Data has been removed from the session";
    // }

    public static function setCookie(Request $request) {
      $minutes = 1;
      $cookie = Cookie::make('name', 'value', 120);
      
   }
      public static function getCookie(Request $request) {
         $value =  Cookie::get('name');
         return $value;
      }

}
