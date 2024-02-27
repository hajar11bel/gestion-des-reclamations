<?php

namespace App\Http\Controllers;
use App\Models\Personnel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function suivreReclamation(){
        $reclamations = Reclamation::where('statu','en attente')->where('user_id',Auth::user()->id)->get();
        return view('user.suivreReclamation',compact('reclamations'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function historique(){
        $reclamations =Reclamation::where('statu',"termine")->where('user_id',Auth::user()->id)->get();
        return view('user.historique',compact('reclamations'));
    }
    public function ajouterreclamation(Request $request){
        
        $submitedData = $request->validate([
            'message' => 'required|string',            
        ]);
        
        $submitedData['departement_id'] = Auth::user()->departement_id;
        $submitedData['user_id'] = Auth::user()->id;

        Reclamation::create($submitedData);
        return redirect('dashuser')->with('success', 'Votre réclamation a été enregistrée avec succès.');  
    }
    public function gesRecla(){
        $personnels = Personnel::all();
        $reclamations =  Reclamation::all();
        return view('admin.gesRecla', compact('reclamations','personnels'));
    }
    public function delete($id){
        $reclamation = Reclamation::find($id);
        $reclamation->delete();
        
        return redirect()->back(); 
    }
    public function update(Request $request, $id)
    {
        $reclamations = Reclamation::findOrFail($id);
        $reclamations->statu = $request->input('statu');
        $reclamations->save();
        return redirect()->back()->with('success', 'Statut de réclamation mis à jour avec succès.');
    }
   
   

    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reclamation $reclamation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   

    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reclamation $reclamation)
    {
        //
    }
}
