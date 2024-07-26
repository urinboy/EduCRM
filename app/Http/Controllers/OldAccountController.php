<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index(){
        $data = Account::find(Auth::user()->id);
        // dd($data); die;
        return view("account.profile", compact("data"));
    }
}
