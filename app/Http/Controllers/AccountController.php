<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //

public function index(){
    $accounts = Account::all();
    return view('admin.accounts.index', compact('accounts'));
}

    public function Credit(Account $from, Account $to, $amount){

    }

    public function Debit(Account $from, Account $to, $amount){

    }
}
