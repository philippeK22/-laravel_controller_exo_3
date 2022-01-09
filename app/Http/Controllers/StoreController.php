<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){

        $store1 =
        (object)[
            "sunday"=>"fermé",
            "monday"=>"7:00 AM to 8:00 PM",
            "tuesday"=>"7:00 AM to 8:00 PM",
            "wednesday"=>"7:00 AM to 8:00 PM",
            "thursday"=>"7:00 AM to 8:00 PM",
            "thursday"=>"7:00 AM to 8:00 PM",
            // "friday"=>"7:00 AM to 8:00 PM",
            // "saturday"=>"9:00 AM to 5:00 PM",


        ];
        return view("store",compact("store1"));



    }

}
