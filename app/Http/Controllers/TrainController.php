<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {

        $title = "Train results";

        $trains = Train::all();
        
        return view('train' , compact('title', 'trains'));
    }
    
    public function departure() {
        
        $title = "Train results";
        $today = date("Y-m-d");
        
        $trains = Train::all()->where('date_departure', $today);
        
       
        
        return view('train' , compact('title', 'trains'));
    }
}