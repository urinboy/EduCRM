<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Models\Address;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AddressController extends Controller
{
    public $name;
    public $permission;

    function __construct()
    {
        $this->permission = "address";
        $this->name = ucfirst(__("address"));
        $this->middleware('permission:'.$this->permission.'-list|'.$this->permission.'-create|'.$this->permission.'-show|'.$this->permission.'-edit|'.$this->permission.'-delete', ['only' => ['index','store']]);
        $this->middleware('permission:'.$this->permission.'-create', ['only' => ['create','store']]);
        $this->middleware('permission:'.$this->permission.'-show', ['only' => ['show']]);
        $this->middleware('permission:'.$this->permission.'-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:'.$this->permission.'-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request): View
    {
        $data = Address::with(['country', 'state', 'city'])->paginate(20);  
        return view('addresses.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 20);
    }
    
    public function create()
    {
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('addresses.create', compact('countries', 'states', 'cities'));
    }

    public function store(AddressRequest $request)
    {
        Address::create($request->validated());
        return redirect()->route('addresses.index')->with('success', __("message.create_success", ['name' => $this->name]));
    }

    public function show(Address $address)
    {
        return view('addresses.show', compact('address'));
    }

    public function edit(Address $address)
    {
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('addresses.edit', compact('address', 'countries', 'states', 'cities'));
    }

    public function update(AddressRequest $request, Address $address)
    {
        $address->update($request->validated());
        return redirect()->route('addresses.index')->with('success', __("message.update_success", ['name' => $this->name]));
    }

    public function destroy(Address $address)
    {
        $address->delete();
        return redirect()->route('addresses.index')->with('success', __("message.delete_success", ['name' => $this->name]));
    }
}
