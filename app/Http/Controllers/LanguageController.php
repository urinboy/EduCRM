<?php

namespace App\Http\Controllers;

use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LanguageController extends Controller
{
            /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:language-list|language-create|language-edit|language-delete', ['only' => ['index','store']]);
         $this->middleware('permission:language-create', ['only' => ['create','store']]);
         $this->middleware('permission:language-show', ['only'=> ['show']]);
         $this->middleware('permission:language-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:language-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request): View
    {
        $data = Language::latest()->paginate(5);
  
        return view('languages.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('languages.create');
    }

    public function store(LanguageRequest $request)
    {
        Language::create($request->validated());
        return redirect()->route('languages.index')->with('success', __("Language created successfully."));
    }

    public function show(Language $language)
    {
        return view('languages.show', compact('language'));
    }

    public function edit(Language $language)
    {
        return view('languages.edit', compact('language'));
    }

    public function update(LanguageRequest $request, Language $language)
    {
        $language->update($request->validated());
        return redirect()->route('languages.index')->with('success', __("Language updated successfully."));
    }

    public function destroy(Language $language)
    {
        $language->delete();
        return redirect()->route('languages.index')->with('success', __("Language deleted successfully."));
    }
    
}
