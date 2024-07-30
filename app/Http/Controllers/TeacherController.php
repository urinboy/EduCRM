<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Http\Requests\OrganizationRequest;
use App\Models\Account;
use App\Models\Address;
use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Language;
use App\Models\Organization;
use App\Models\State;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Hash;
use Illuminate\Http\RedirectResponse;

class TeacherController extends Controller
{
    public function index(){
        $users = User::all();
        $roles = Role::all();
        $teachers = Teacher::all();
        return view("teachers.index", compact("teachers","users"));
    }

    public function create()
    {
        return view("teachers.create");
    }


    // Yangi teacher userini yaratish sahifasi
    public function userCreate()
    {
        $roles = Role::pluck('name','name')->all();
        return view('teachers.wizard.user',compact('roles'));
    }

    // Yangi userni saqlash
    public function userStore(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        $userID = $user->id;
    
        return redirect()->route('teacher.userAccountCreate', $userID)->with('success',  __("message.create_success", ['name' => ucfirst(__("user"))]));
    }


    // Yangi user uchun account yaratish sahifasi
    public function userAccountCreate($userID){
        $user = User::find($userID);
        $languages = Language::all();
        $currencies = Currency::all();
        return view("teachers.wizard.account",compact("user", "languages","currencies"));
    }

    // Yangi user accountini saqlash
    public function userAccountStore(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'photo' => 'nullable|image|max:2048',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'bio' => 'nullable|string|max:3000',
            'phone' => 'nullable|string|max:20',
            'language_id' => 'nullable|exists:languages,id',
            'currency_id' => 'nullable|exists:currencies,id',
            'status' => 'required|in:active,inactive,unallowed,blocked',
        ]);

        $data = $request->all();
        $userID = $data['user_id'];

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('teachers', 'public');
        }
        Account::create($data);

        return redirect()->route('teacher.userAddressCreate', $userID)->with('success',  __("message.create_success", ['name' => ucfirst(__("account"))]));
    
    }

    
    // Yangi user addressini yaratish sahifasi
    public function userAddressCreate($userID){
        $user = User::find($userID);
        $account = Account::find($userID);
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        return view("teachers.wizard.address",compact("user", "account", "countries", "states", "cities"));
    }


    // Yangi user addressini saqlash
    public function userAddressStore($userID, AddressRequest $request){
        $address = Address::create($request->validated());
        $account = Account::find($userID);
        $account->address_id = $address->id;
        $account->update();
        return redirect()->route('teacher.userOrganizationCreate', $userID)->with('success',  __("message.create_success", ['name' => ucfirst(__("address"))]));
    }

    
    // Yangi user organizatsiyani yaratish sahifasi
    public function userOrganizationCreate($userID){
        $user = User::find($userID);
        return view("teachers.wizard.organization",compact("user"));
    }


    // Yangi user organizatsiyani saqlash
    public function userOrganizationStore($userID, OrganizationRequest $request){
        $organization = Organization::create($request->validated());;
        $account = Account::find($userID);
        $account->organization_id = $organization->id;
        $account->update();
        return redirect()->route('teacher.userAddTeacherCreate', $userID)->with('success',  __("message.create_success", ['name' => ucfirst(__("organization"))]));
    }
    

    // Yangi user teacherni qo'shish yaratish sahifasi
    public function userAddTeacherCreate ($userID){
        $user = User::find($userID);
        return view("teachers.wizard.teacher",compact("user"));
    }


    // Yangi user organizatsiyani saqlash
    public function userAddTeacherStore($userID, Request $request){

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'account_id' => 'required|exists:accounts,id',
            'hire_date' => 'required|date',
            'date_of_resignation' => 'nullable|date|after:hire_date',
            'work_experience' => 'nullable|string|max:255',
        ]);
        
        Teacher::create($request->all());

        return redirect()->route('teacher.complate', $userID)->with('success',  __("message.create_success", ['name' => ucfirst(__("organization"))]));
    }

    public function complate($userID)
    {
        // Fetch the user by ID with related account and teacher data
        $user = User::with(['account.organization', 'account.address', 'teacher'])->findOrFail($userID);

        // Check if the user has a teacher role (assuming you have a method to check roles)
        if ($user->getRolesName() !== 'Teacher') {
            abort(404, 'User is not a Teacher');
        }

        // Fetch additional related data if needed
        $organizations = Organization::all();
        $addresses = Address::all();

        return view('teachers.wizard.complate', compact('user', 'organizations', 'addresses'));
    }
    
    public function show($id)
    {
        // Fetch the user by ID with related account and teacher data
        $user = User::with(['account.organization', 'account.address', 'teacher'])->findOrFail($id);

        // Check if the user has a teacher role (assuming you have a method to check roles)
        if ($user->getRolesName() !== 'Teacher') {
            abort(404, 'User is not a Teacher');
        }

        // Fetch additional related data if needed
        $organizations = Organization::all();
        $addresses = Address::all();

        return view('teachers.wizard.complate', compact('user', 'organizations', 'addresses'));
    }
}
