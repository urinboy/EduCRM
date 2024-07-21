<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganizationRequest;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrganizationController extends Controller
{
    public function index(Request $request): View
    {
        $data = Organization::latest()->paginate(5);
  
        return view('organizations.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('organizations.create');
    }

    public function store(OrganizationRequest $request)
    {
        Organization::create($request->validated());
        return redirect()->route('organizations.index')
            ->with('success', __("message.create_success", ['name' => ucfirst(__("organization"))]));
    }

    public function show(Organization $organization)
    {
        return view('organizations.show', compact('organization'));
    }

    public function edit(Organization $organization)
    {
        return view('organizations.edit', compact('organization'));
    }

    public function update(OrganizationRequest $request, Organization $organization)
    {
        $organization->update($request->validated());
        return redirect()->route('organizations.index')
            ->with('success', __("message.update_success", ['name' => ucfirst(__("organization"))]));
    }

    public function destroy(Organization $organization)
    {
        $organization->delete();
        return redirect()->route('organizations.index')
            ->with('success', __("message.delete_success", ['name' => ucfirst(__("organization"))]));
    }
}
