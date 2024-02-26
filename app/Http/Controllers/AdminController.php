<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Personnel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
   
        if(Auth::guard("admin")->attempt($request->only('email','password'))){
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
        $admin=Admin::find($id);
        $user->delete();
        $admin->delete();
        return redirect()->back(); 
    }
    public function gesPerso(){
        $personnels = Personnel::all();
        return view('admin.gesPerso', compact('personnels'));
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
    public function registre(Request $request)
    {
        $request['password'] = Hash::make($request['password']);
        Admin::create($request->post());
    
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
