<?php

namespace App\Http\Controllers;

use App\CountryModel;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {
        $countries = DB::table('country')->get();

        return view('country.index', compact('countries'));
    }
}