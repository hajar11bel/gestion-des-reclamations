<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\Reclamation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function login(Request $request){
        if(Auth::guard("personnel")->user()->attempt(['email' => $request->email,'password' => $request->password])){
            return view('personnel.personnel');
        }
            return redirect()->back()->withInput(['email' => $request->email]);
    }
    public function personnel(){
        
        $personnels =  Personnel::all();
        $reclamations = Reclamation::all();
        return view('personnel.personnel', compact("personnels","reclamations"));
    }


    public function store (Request $request){
        $submitedData = $request->validate([
            'statu' => 'required|string'  
        ]);
        $reclamation = new Reclamation;
        $reclamation -> personnel_id = $submitedData['statu'];
        $reclamation->save();
        return redirect('personnel');

    }


    /**
     * Display the specified resource.
     */
    public function show(Personnel $personnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personnel $personnel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personnel $personnel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personnel $personnel)
    {
        //
    }
}
