<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CityController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:city-list|city-create|city-edit|city-delete', ['only' => ['index','store']]);
         $this->middleware('permission:city-create', ['only' => ['create','store']]);
         $this->middleware('permission:city-show', ['only'=> ['show']]);
         $this->middleware('permission:city-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:city-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request): View
    {
        $cities = City::latest()->with('state.country')->paginate(20);  
        return view('cities.index',compact('cities'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $countries = Country::all();
        return view('cities.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'state_id' => 'required|exists:states,id',
        ]);

        City::create($request->all());
        return redirect()->route('cities.index')->with('success', __("City created successfully."));
    }

    public function edit(City $city)
    {
        $countries = Country::all();
        return view('cities.edit', compact('city', 'countries'));
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'state_id' => 'required|exists:states,id',
        ]);

        $city->update($request->all());
        return redirect()->route('cities.index')->with('success', __("City updated successfully."));
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index')->with('success', __("City deleted successfully."));
    }

    public function getStates(Request $request)
    {
        $countryId = $request->country_id;
        $states = State::where('country_id', $countryId)->get();
        return response()->json($states);
    }
}
