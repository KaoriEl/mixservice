<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
        public  function index(){
            return view('maps.main',[
                'city'=>Map::select(['created_at','city','data_x', 'data_y', 'id',])->latest()->get(),
            ]);
        }
}
