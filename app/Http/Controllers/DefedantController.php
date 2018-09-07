<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DefedantController;
use DB;
use App\Http\Requests;
use App\Defedant;
use Illuminate\Http\Request;

class DefedantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.defedant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $defedant=new defedant();
        $this->validate($request,[
            'name'=> 'required',
            'idno' => 'required',
            'number' =>'required',
            'casedscription'=>'required',
            'filename'=>'required',
            'date'=>'required',
            'casetype'=>'required'
            
        ]);
    
        $defedant->name = $request->name;
        $defedant->idno= $request->idno;
        $defedant->number= $request->number;
        $defedant->casedscription = $request->casedscription;
        $defedant->filename = $request->filename;
        $defedant->date = $request->date;
        $defedant->casetype = $request->casetype;
        // $student->age = $request->age;
         
    
        $defedant->save ();
       return redirect()->route('defedant')->with('success','information added'); 
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
