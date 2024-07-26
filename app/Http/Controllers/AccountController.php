<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Requests\AccountRequest;
use App\Models\Address;
use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;
use App\Models\Organization;
use App\Models\State;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    // public function index(){
    //     if(Auth::user()->id ){
    //     $organizations = Organization::all();
    //     $addresses = Address::all();
    //     $languages = Language::all();
    //     $currencies = Currency::all();
    //     $data = Account::find(Auth::user()->id);
    //     // dd($data); die;
    //     // dd();
    //     return view("account.profile", compact("data", 'organizations', 'addresses', 'languages', 'currencies'));
    // }else{
    //     return view('');
    // }
    // }

    public function profile(){
        $user = Auth::user();

        // Foydalanuvchining Account ma'lumotlarini tekshirish
        if (!$user->account) {
            return redirect()->route('accounts.create');
        }

        $organizations = Organization::all();
        $addresses = Address::all();
        $languages = Language::all();
        $currencies = Currency::all();
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        $account = $user->account;
        return view('accounts.profile', compact('account', 'organizations', 'addresses', 'languages', 'currencies', 'countries', 'states', 'cities'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('accounts.create', compact('user'));
    }

    public function store(AccountRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::id();

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        Account::create($data);

        return redirect()->route('profile')->with('success', 'Account created successfully.');
    
    }

    public function show(Account $account)
    {
        //
    }

    public function edit(Account $account)
    {
        //
    }

    // public function update(AccountRequest $request, Account $account)
    // {
    //     $data = $request->validated();

    //     if ($request->hasFile('photo')) {
    //         // Delete old photo if exists
    //         if ($account->photo && Storage::disk('public')->exists($account->photo)) {
    //             Storage::disk('public')->delete($account->photo);
    //         }

    //         // Store new photo
    //         $data['photo'] = $request->file('photo')->store('photos', 'public');
    //     }

    //     $account->update($data);

    //     return redirect()->route('accounts.index')->with('success', 'Account updated successfully.');
    // }

    
    public function getStates(Request $request)
    {
        $countryId = $request->country_id;
        $states = State::where('country_id', $countryId)->pluck('name', 'id');
        return response()->json($states);
    }

    public function getCities(Request $request)
    {
        $stateId = $request->state_id;
        $cities = City::where('state_id', $stateId)->pluck('name', 'id');
        return response()->json($cities);
    }

    public function addressUpdate(Request $request, $id)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'state_id' => 'required|exists:states,id',
            'city_id' => 'required|exists:cities,id',
            'district' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:20',
            'detail' => 'nullable|string|max:500',
        ]);

        $account = Account::findOrFail($id);

        if ($account->address) {
            $account->address->update($request->all());
        } else {
            $address = new Address($request->all());
            $account->address()->save($address);
        }

        return redirect()->route('profile', $account->id)->with('success', 'Address updated successfully.');
    }

    // public function addressUpdate(Request $request)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'country_id' => 'required',
    //         'state_id' => 'required',
    //         'city_id' => 'required',
    //         'district' => 'required|string|max:255',
    //         'street' => 'required|string|max:255',
    //         'zip_code' => 'required|string|max:10',
    //         'detail' => 'nullable|string|max:500',
    //     ]);

    //     // Get the authenticated user's ID
    //     $userId = Auth::user()->id;

    //     // Find the user's account record
    //     $account = Account::where('user_id', $userId)->first();

    //     if ($account) {
    //         // Update the address details
    //         $account->country_id = $request->input('country');
    //         $account->state_id = $request->input('state');
    //         $account->city_id = $request->input('city');
    //         $account->district = $request->input('district');
    //         $account->street = $request->input('street');
    //         $account->zip_code = $request->input('zip_code');
    //         $account->detail = $request->input('detail');

    //         // Save the updated account record
    //         $account->save();

    //         return redirect()->route('profile')->with('success', 'Address yangilandi');
    //     } else {
    //         return redirect()->route('profile')->with('error', 'Account topilmadi');
    //     }
    // }
    
    
    // public function profileUpdate(AccountRequest $request, Account $account)
    // {
    //     // $user = Auth::user(); 
    //     // $account = Account::find($request->id);

    //     $validated = $request->validated();

    //     if ($request->hasFile('photo')) {
    //         // Delete old photo if exists
    //         if ($account->photo) {
    //             Storage::delete($account->photo);
    //         }
    //         // Store new photo
    //         $path = $request->file('photo')->store('photos', 'public');
    //         $validated['photo'] = $path;
    //     }

    //     $account->update($validated);

    //     return redirect()->route('profile', $account->id)->with('success', 'Profile updated successfully.');
    // }

    public function profileUpdate(Request $request)
    {
        // dd($request->birthday); die;

        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'username' => 'required|string|max:255|unique:users,name,' . Auth::id(),
            'phone' => 'required|string|max:13',
            'birthday' => 'required|date',
            'gender' => 'required|string|in:male,female,other',
        ]);

        // Get the authenticated user's ID
        $userId = Auth::user()->id;

        // Find the user and account by user ID
        $user = User::findOrFail($userId);
        $account = Account::where('user_id', $userId)->first();

        if ($user && $account) {
            // Update the user with the new profile details
            $user->update([
                'username' => $request->username,
            ]);

            // Update the account with the new profile details
            $account->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'middle_name' => $request->middle_name,
                'phone' => $request->phone,
                'birthday' => $request->birthday,
                'gender' => $request->gender,
            ]);

            // Redirect back with success message
            return redirect()->route('profile')->with('success', 'Profile yangilandi');
        }

        // If user or account not found, redirect back with error message
        return redirect()->route('profile')->with('error', 'User or Account not found');
    }

    public function passwordUpdate(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);

        // Check if the current password matches
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password does not match.']);
        }

        // Update the user's password
        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('profile')->with('success', 'Password updated successfully.');
    }

    public function destroy(Account $account)
    {
        //
    }
}
