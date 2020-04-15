<?php

namespace App\Http\Controllers;

use App\Account;
use App\Identification;
use App\Pays;
use App\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $identifications = Identification::all();
        $pays = Pays::all();
        return view('admin.users.create', compact('identifications', 'pays'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'firstname' => 'required|string|min:3',
            'lastname' => 'required|string|min:3',
            'identification_id' => 'required|integer',
            'identification' => 'required|integer|min:9|unique:users',
            'pays_id' => 'required|integer|max:1',
            'email' => 'required|email|unique:users',
            'phone' => 'required|integer|min:9|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $input = $request->all();
        
        User::create($input);
        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
