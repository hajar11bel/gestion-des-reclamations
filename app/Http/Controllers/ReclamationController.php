<?php

namespace App\Http\Controllers;
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
        
        $reclamations =  Reclamation::all();
        return view('admin.gesRecla', compact('reclamations'));
    }
    public function delete($id){
        $reclamation = Reclamation::find($id);
        $reclamation->delete();
        
        return redirect()->back(); 
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
    public function show(Reclamation $reclamation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reclamation $reclamation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reclamation $reclamation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reclamation $reclamation)
    {
        //
    }
}
