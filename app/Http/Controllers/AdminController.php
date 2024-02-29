<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Personnel;
use App\Models\Reclamation;
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

    public function logoutt(){
        
        Auth::guard("admin")->logout();
            return view('admin.login');
        
    }

    public function detail($id){ 
            $user = User::find($id);
           
            return view('admin/detailuser' ,compact('user')); 
    }

    public function detailP($id){ 
        $personnel = Personnel::find($id);
       
        return view('admin/detailperso' ,compact('personnel')); 
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
    
    public function ajouterPerso(Request $request){
        $request['password'] = Hash::make($request['password']);

        Personnel::create($request->post());

        
        return redirect('getPerso');
    }

    public function ajouterUser(Request $request){
        $request['password'] = Hash::make($request['password']);

        User::create($request->post());

        
        return redirect('gesUsers');
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
    public function edit($id)
{
    $user = User::find($id);
    return view('admin.updateUser')->with('user', $user);
}
public function editPerso($id)
{
    $personnel = Personnel::find($id);
    return view('admin.updatePerso')->with('personnel', $personnel);
}


public function updateUser(Request $request, $id)
{
    
    $user = User::findOrFail($id); 
    
    $user->name = $request->input('name');
    $user->cin = $request->input('cin');
    $user->date_naissance = $request->input('date_naissance');
    $user->email = $request->input('email');
    
    $user->save();

    
    return redirect()->back()->with('success', 'Utilisateur mis à jour avec succès.');
}

public function updatePerso(Request $request, $id)
{
    

    
    $personnel = Personnel::findOrFail($id); 
    $personnel->name = $request->input('name');
    $personnel->cin = $request->input('cin');
    $personnel->date_naissance = $request->input('date_naissance');
    $personnel->email = $request->input('email');
    
    
    $personnel->save();

    
    return redirect('gesPerso')->with('success', 'Utilisateur mis à jour avec succès.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
