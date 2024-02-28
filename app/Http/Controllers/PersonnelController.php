<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\Reclamation;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function del($id){
        $personnels = Personnel::find($id);
        $personnels->delete();
        
        return redirect()->back(); 
    }
    public function login(Request $request){
        if(Auth::guard("personnel")->attempt($request->only('email','password'))){
           
            return redirect('/personnel/personnel');
        }
            return redirect()->back()->withInput(['email' => $request->email]);
    }
    public function personnel(){
        
        $id=Auth::guard('personnel')->user()->id;
        $reclamations = Reclamation::where('personnel_id',$id)->get();
        return view('personnel.personnel', compact("reclamations"));
    }
    

   /* public function store (Request $request){
        $submitedData = $request->validate([
            'statu' => 'required|string'  
        ]);
        $reclamation = new Reclamation;
        $reclamation -> personnel_id = $submitedData['statu'];
        $reclamation->save();
        return redirect('personnel');

    }*/
    public function reg(Request $request){
        $request['password'] = Hash::make($request['password']);

        Personnel::create($request->post());

        
        return redirect('personnel');
    }
   /* public function store (Request $request){

        

        $submitedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'categorie_id' => 'required|string'
            
        ]);

        $product = new Produit;
        $product -> nom = $submitedData['nom'];
        $product -> prix = $submitedData['prix'];
        $product -> categorie_id = $submitedData['categorie_id'];
        $product->save();
        return redirect('afficher');

    }*/
   
    


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
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personnel $personnel)
    {
        //
    }
}
