<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function login(Request $request){
        if(Auth::guard("admin")->user()->attempt(['email' => $request->email,'password' => $request->password])){
            return view('admin.dash');
        }
            return redirect()->back()->withInput(['email' => $request->email]);
    }
  
    
    public function gesUsers(){
        $users =  User::all();
        return view('admin.gesUsers', compact('users'));
    }
    public function delet($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back(); 
    }
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
