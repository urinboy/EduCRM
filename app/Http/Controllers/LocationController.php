<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;

class LocationController extends Controller
{
    public function getStates(Request $request)
    {
        $states = State::where('country_id', $request->country_id)->get()->pluck('name', 'id');
        return response()->json($states);
    }

    public function getCities(Request $request)
    {
        $cities = City::where('state_id', $request->state_id)->get()->pluck('name', 'id');
        return response()->json($cities);
    }
}
