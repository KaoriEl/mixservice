<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public  function index(){
        return view('weather.main',[
            'weather'=>Weather::select(['created_at','city','city_id', 'id',])->latest()->get(),
        ]);
    }
}
