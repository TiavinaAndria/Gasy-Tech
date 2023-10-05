<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informateur;

class EtudiantController extends Controller
{
    public function acceuil()
    {
        return view('menu.acceuil');
    }
    public function information()
    {
        $Informateur = Informateur::all();
        return view('menu.information',compact('Informateur'));
    }
    public function ListeEtudiant()
     {
        return view('menu.ListeEtudiant');
     }
     public function gestionEcolage()
     {
        return view('menu.gestionEcolage');
     }
     public function ajouterInformateur()
     {
        return view('menu.ajouterInformateur');
     }
     public function ajouterInformateur_traitement(Request $request)
     {
        $request->validate([
            'nom'=>'required',
            'Filliere'=>'required',
            'Contact'=>'required',
        ]);
        $Informateur=new Informateur();
        $Informateur->nom=$request->nom;
        $Informateur->Filliere=$request->Filliere;
        $Informateur->Contact=$request->Contact;
        $Informateur->save();
        return redirect('/ajouterInformateur')->with('status','Sucess'); 
    }

     
}
