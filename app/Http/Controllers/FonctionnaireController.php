<?php

namespace App\Http\Controllers;

use App\Models\Fonctionnaire;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FonctionnaireController extends Controller
{
   
    public function index()
    {
        $fonctionnaires =DB::table('fonctionnaires')
        // ->orderBy('id','desc')->paginate(6)
        ->join('services','services.id','=','services_id')
        ->get();
        $services =DB::table('services')->get();
       

        return view('fonctionnaire.index',['fonctionnaires'=> $fonctionnaires, 'services'=>$services]);
    }

    public function create()
    {
        $services =DB::table('services')->get();
        return view('fonctionnaire.create',['services'=>$services]);
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'CIN'=>'required',
            'email'=>'required|email|unique:fonctionnaires',
            'grade'=>'required',
            'N_SOM'=>'required|unique:fonctionnaires',
            'statue'=>'required',
            'telephon'=>'required',
            'service'=>'required',
    ]);

            $service =Service::findOrFail($request->service);
            $service->fonctionnaires()->create([
                'services_id'=>$request->service,   
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'CIN'=>$request->CIN,
                'email'=>$request->email,
                'grade'=>$request->grade,
                'N_SOM'=>$request->N_SOM,
                'statue'=>$request->statue,
                'telephon'=>$request->telephon,
            

            ]);
            return redirect()->route('fonctionnaire.index')->with('success','Fonctionnaire has been created successfully.');
    }

  
    public function show(int $fonctionnaire_id)
    {
            $fonctionnaire=Fonctionnaire::findOrFail($fonctionnaire_id); 
            // $fonctionnaire->function->attribut;   
            $services=Service::all();
            // $fonctionnaire=Fonctionnaire::findOrFail($fonctionnaire)->where('id',$fonctionnaire);     
            return view('fonctionnaire.show',compact('fonctionnaire','services'));
        
    }

   
    public function edit(Request $request, int $fonctionnaire)
    {
        $services=Service::all();
        $fonctionnaire=Fonctionnaire::findOrFail($fonctionnaire);
        return view('fonctionnaire.edit',compact('services','fonctionnaire'));
    }

  
    public function update(Request $request,  $fonctionnaire_id)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'CIN'=>'required',
            'email'=>'required|email',
            'grade'=>'required',
            'N_SOM'=>'required',
            'statue'=>'required',
            'telephon'=>'required',
            'service'=>'required',
    ]);

            $fonctionnaire =Service::findOrFail($request->service)
            ->fonctionnaires()->where('id',$fonctionnaire_id)->first();

            $fonctionnaire->nom=$request->nom;
            $fonctionnaire->prenom=$request->prenom;
            $fonctionnaire->CIN=$request->CIN;
            $fonctionnaire->email=$request->email;
            $fonctionnaire->grade=$request->grade;
            $fonctionnaire->N_SOM=$request->N_SOM;
            $fonctionnaire->statue=$request->statue;
            $fonctionnaire->telephon=$request->telephon;
            $fonctionnaire->services_id=$request->service;

            $fonctionnaire->update();
            

            
            return redirect()->route('fonctionnaire.index')->with('success','Fonctionnaire has been updated successfully.');
    }

    public function destroy(string $id)
    {
        //
    }
}
