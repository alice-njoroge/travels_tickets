<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){
        return view('index');
    }

    public function hotels(){
        $hotels= Hotel::all();
        return view('hotels',['hotels'=>$hotels]);
    }

}
