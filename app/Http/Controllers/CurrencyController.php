<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CurrencyController extends Controller
{

    // Klass xususiyati sifatida e'lon qilamiz
    public $name;
    public $permission;

    function __construct()
    {
        $this->permission = "currency";
        $this->name = ucfirst(__("currency"));
        $this->middleware('permission:'.$this->permission.'-list|'.$this->permission.'-create|'.$this->permission.'-show|'.$this->permission.'-edit|'.$this->permission.'-delete', ['only' => ['index','store']]);
        $this->middleware('permission:'.$this->permission.'-create', ['only' => ['create','store']]);
        $this->middleware('permission:'.$this->permission.'-show', ['only' => ['show']]);
        $this->middleware('permission:'.$this->permission.'-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:'.$this->permission.'-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request): View
    {
        $data = Currency::latest()->paginate(10);
        return view('currencies.index',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('currencies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
        ]);

        Currency::create($request->all());
        return redirect()->route('currencies.index')->with('success',  __("message.create_success", ['name' => $this->name]));
    }

    public function show(Currency $currency)
    {
        return view('currencies.show', compact('currency'));
    }

    public function edit(Currency $currency)
    {
        return view('currencies.edit', compact('currency'));
    }

    public function update(Request $request, Currency $currency)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
        ]);

        $currency->update($request->all());
        return redirect()->route('currencies.index')->with('success', __("message.update_success", ['name' => $this->name]));
    }

    public function destroy(Currency $currency)
    {
        $currency->delete();
        return redirect()->route('currencies.index')->with('success', __("message.delete_success", ['name' => $this->name]));
    }
}
