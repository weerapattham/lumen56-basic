<?php

namespace App\Http\Controllers;

use App\CityModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index()
    {
//        $cities = CityModel::all();
        $cities = DB::table('city')->get();

        return view('city.index', compact('cities'));
    }
}