<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = patient::all();
        return view('patient.show',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return  view('patient.patient');
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
            'pxLast' => 'required',
            'pxFirst' => 'required',
            'pxGender' => 'required',
            'pxBday' => 'required',
            'timeBirth' => 'required',
            'pxAddr' => 'required',
            'pxContact' => 'required',
            'pxFather' => 'required',
            'pxMother' => 'required',
            'typeDelivery' => 'required',
            ]);
        $patient = new patient;
        $patient->pxLast = $request->pxLast;
        $patient->pxFirst = $request->pxFirst;
        $patient->pxGender = $request->pxGender;
        $patient->pxBday = $request->pxBday;
        $patient->timeBirth = $request->timeBirth;
        $patient->pxAddr = $request->pxAddr;
        $patient->pxContact = $request->pxContact;
        $patient->pxFather = $request->pxFather;
        $patient->pxMother = $request->pxMother;
        $patient->typeDelivery = $request->typeDelivery;
        $patient->birthWeight = $request->birthWeight;
        $patient->birthLength = $request->birthLength;
        $patient->headCircumference = $request->headCircumference;
        $patient->comBirth = $request->comBirth;
        $patient->save();

        return redirect(route('patient.index'));
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
    
        $patients = patient::where('id',$id)->first();
        return view('patient.edit',compact('patients'));
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
        $this->validate($request,[
            'pxLast' => 'required',
            'pxFirst' => 'required',
            'pxGender' => 'required',
            'pxBday' => 'required',
            'timeBirth' => 'required',
            'pxAddr' => 'required',
            'pxContact' => 'required',
            'pxFather' => 'required',
            'pxMother' => 'required',
            'typeDelivery' => 'required',
            ]);
        $patient = patient::find($id);
        $patient->pxLast = $request->pxLast;
        $patient->pxFirst = $request->pxFirst;
        $patient->pxGender = $request->pxGender;
        $patient->pxBday = $request->pxBday;
        $patient->timeBirth = $request->timeBirth;
        $patient->pxAddr = $request->pxAddr;
        $patient->pxContact = $request->pxContact;
        $patient->pxFather = $request->pxFather;
        $patient->pxMother = $request->pxMother;
        $patient->typeDelivery = $request->typeDelivery;
        $patient->birthWeight = $request->birthWeight;
        $patient->birthLength = $request->birthLength;
        $patient->headCircumference = $request->headCircumference;
        $patient->comBirth = $request->comBirth;
        $patient->save();

        return redirect(route('patient.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        patient::where('id',$id)->delete();
        return redirect()->back();
    }
}
