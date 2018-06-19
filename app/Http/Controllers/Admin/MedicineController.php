<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\medicine;
use App\supplier;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meds = medicine::all();
        return view('medicine.show',compact('meds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sups =supplier::all();
        return  view('medicine.medicine',compact('sups'));
        return redirect(route('admin.home'));
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
            'medName' => 'required',
            'medStock' => 'required',
            'medSup' => 'required',
            ]);
        $med = new medicine;
        $med->medName = $request->medName;
        $med->medStock = $request->medStock;
        $med->medSup = $request->medSup;
        $med->save();

        return redirect(route('medicine.index'));
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
        $sups =supplier::all();
        $meds = medicine::where('id',$id)->first();
        return  view('medicine.edit',compact('sups','meds'));
        
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
            'medName' => 'required',
            'medStock' => 'required',
            'medSup' => 'required',
            ]);
        $med = medicine::find($id);
        $med->medName = $request->medName;
        $med->medStock = $request->medStock;
        $med->medSup = $request->medSup;
        $med->save();

        return redirect(route('medicine.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          medicine::where('id',$id)->delete();
        return redirect()->back();
    }
}
