<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Models\crud;


class crudscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cruds=crud::all();
        return view('show',compact('cruds'));
        //
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
        $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|max:255', 
            'age' => 'required|integer|between:1,99',
            'date' => 'required|date', 
        ]);
        
    
           $crud= new crud;
           $crud->name=$request->name;
           $crud->email=$request->email;
          $crud->age=$request->age;
          $crud->date=$request->date;
          $crud->save();
          return redirect("show");

        
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crud=crud::find($id);
        return view('update',compact('crud'));

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {



        
        $request->validate([
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|max:255', 
            'age' => 'required|integer|between:1,99',
            'date' => 'required|date', 
        ]);
        $crud=crud::find($request->id);
        
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->age=$request->age;
        $crud->date=$request->date;
        $crud->save();
        return redirect("show");
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud=crud::find($id);
        $crud->delete();
        return back();
        //
    }
}
