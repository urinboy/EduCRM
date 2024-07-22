<?php

namespace App\Http\Controllers;

use App\Helpers\NetworkHelper;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;

class ContactController extends Controller
{
    public function index(Request $request): View
    {
        // $contact = Contact::orderBy('created_at', 'desc')->first();
        // dd($contact);die;
        
        $contact = Contact::orderBy('created_at', 'desc')->first();
        $data = Contact::latest()->paginate(7);  
        return view('contacts.index',compact(['data', 'contact']))
            ->with('i', ($request->input('page', 1) - 1) * 20);


        // $contacts = Contact::all();
        // return view('contacts.index', compact('contacts'));


    }

    public function create(Request $request): View
    {
       // IP manzilini olish
       //    $ipAddress = "95.46.96.14";
       $ipAddress = $request->ip();
     
       // Qurilma ma'lumotlarini olish
       $agent = new Agent();
       $device = $agent->device();
       $platform = $agent->platform();
       $browser = $agent->browser();

       // Geolokatsiya ma'lumotlarini olish
       $location = Location::get($ipAddress);

       $locationData = [
           'city' => $location->cityName ?? 'Unknown',
           'region' => $location->regionName ?? 'Unknown',
           'country' => $location->countryName ?? 'Unknown',
           'latitude' => $location->latitude ?? 'Unknown',
           'longitude' => $location->longitude ?? 'Unknown',
       ];

       // MAC manzilini olish
       $macAddress = NetworkHelper::getMacAddress();

       // Barcha ma'lumotlarni birlashtirish
       $data = [
           'ip_address' => $ipAddress,
           'device' => $device,
           'platform' => $platform,
           'browser' => $browser,
           'location' => $locationData['city'] . ', ' . $locationData['region'] . ', ' . $locationData['country'],
           'latitude' => $locationData['latitude'],
           'longitude' => $locationData['longitude'],
           'mac_address' => $macAddress,
       ];
        // dd($data);die;

        return view('contacts.create', compact('data'));
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->route('contacts.create')->with('success', __("message.submit_success", ['name' => ucfirst(__("your message"))]));
    }

    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->validated());
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
