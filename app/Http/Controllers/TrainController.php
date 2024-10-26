<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $date_day = Carbon::now()->format('Y-m-d');
        $trains = $trains = Train::where('departure_date', "$date_day")->get();


        dump($trains);
        return view("trains.index", compact("trains", "date_day",));
    }
}