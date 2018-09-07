<?php

namespace App\Http\Controllers;


use App\Http\Controllers\PlaintsController;
use DB;
use App\Http\Requests;
use App\plaints;
use Illuminate\Http\Request;
class PlaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $complaints = plaints::paginate(15);

        return view('admin.plaintfs.index',compact('complaints'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.plaintiff');
        
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
        $plaints = new plaints();
    $this->validate($request,[
        'name'=> 'required',
        'idno' => 'required',
        'telno' =>'required',
        'acc_name'=>'required',
        'acc_residence'=>'required',
        'casedescription'=>'required',
        'filename'=>'required',
        'date'=>'required',
        'casetype'=>'required'
        
    ]);

    $plaints->name = $request->name;
    $plaints->idno= $request->idno;
    $plaints->telno= $request->telno;
    $plaints->acc_name = $request->acc_name;
    $plaints->acc_residence = $request->acc_residence;
    $plaints->casedescription = $request->casedescription;
    $plaints->filename = $request->filename;
    $plaints->date = $request->date;
    $plaints->casetype = $request->casetype;
    // $student->age = $request->age;
     

    $plaints->save ();
   return redirect()->route('plaintiff')->with('success','information added'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


public function accept($id){
    //status 1 or 0
    //default 0 
    //when accepted status  =1 
    $status = plaints::find('status')->where('id',$id);

    if($status == 0){
        $status = 1;
    }else{
        $status = 1;
    }

    $status->update();
    

}

public function reject($id){
    //status = 0
}
}
