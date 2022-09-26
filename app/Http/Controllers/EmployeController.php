<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;


class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employes=Employe::all();
        return view("employes.index")->with([
            "employes" => $employes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employes = Employe::all();
        return view("employes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'registration_number'=> 'required | unique:employes,registration_number',
            'fullname' => 'required | unique:employes,fullname',
            'depart' => 'required',
            'hire_date' => 'required',
            'phone' => 'required|max:11',
            'address' => 'required',
            'city' => 'required'
        ]);
        Employe::create($request->except('_token'));
        return redirect()->route("employes.index")->with([
            "success"=>"Employe added successfully"
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rn)
    {
        //
        $employe = Employe::where('registration_number', $rn)->first();
        return view("employes.show")->with([
            "employe" => $employe
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($rn)
    {
        $employe = Employe::where('registration_number', $rn)->first();
        return view("employes.edit")->with([
            "edit" => $employe
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rn)
    {
        $employe = Employe::where('registration_number', $rn)->first();
        $this->validate($request, [
            'registration_number' => 'required|unique:employes,id,'.$employe->registration_number,
            'fullname' =>'required | unique:employes,id,' . $employe->fullname,
            'depart' => 'required',
            'hire_date' => 'required',
            'phone' => 'required|max:11',
            'address' => 'required',
            'city' => 'required'
        ]);
        $employe->update($request->except('_token'));

        return redirect()->route("employes.index")->with([
            "success" => "Employe $employe->fullname Update successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employe =Employe::where('registration_number',$id)->first();
        $employe->delete();
        return redirect()->route("employes.index");
    }

    public function vacationRequest($rn)
    {
        $employe = Employe::where('registration_number', $rn)->first();
        return view("employes.vacation")->with([
            "employe" => $employe
        ]);
    }

    public function certificate($rn)
    {
        $employe = Employe::where('registration_number', $rn)->first();
        return view("employes.certificate")->with([
            "employe" => $employe
        ]);
    }



}
