<?php

namespace App\Http\Controllers;

use App\Models\City;
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
        $data = City::latest()->with('state.country')->paginate(20);  
        return view('cities.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 20);
    }

    public function create()
    {
        $states = State::all();
        return view('cities.create', compact('states'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'state_id' => 'required|exists:states,id',
        ]);

        City::create($request->all());
        return redirect()->route('cities.index')->with('success', __("message.create_success", ['name' => ucfirst(__("city"))]));
    }

    public function show(City $city)
    {
        return view('cities.show', compact('city'));
    }

    public function edit(City $city)
    {
        $states = State::all();
        return view('cities.edit', compact('city', 'states'));
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'state_id' => 'required|exists:states,id',
        ]);

        $city->update($request->all());
        return redirect()->route('cities.index')->with('success', __("message.update_success", ['name' => ucfirst(__("city"))]));
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index')->with('success', __("message.delete_success", ['name' => ucfirst(__("city"))]));
    }

    public function getStates(Request $request)
    {
        $countryId = $request->country_id;
        $states = State::where('country_id', $countryId)->get();
        return response()->json($states);
    }
}
