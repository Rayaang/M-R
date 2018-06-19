<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\supplier;
use Illuminate\Http\Request;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sups = supplier::all();
        return view('supplier.show',compact('sups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('supplier.supplier');
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
            'supName' => 'required',
            'supAddr' => 'required',
            'supContact' => 'required',
            ]);
        $sup = new supplier;
        $sup->supName = $request->supName;
        $sup->supAddr = $request->supAddr;
        $sup->supContact = $request->supContact;
        $sup->save();

        return redirect(route('supplier.index'));
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
        $sups = supplier::where('id',$id)->first();
        return view('supplier.edit',compact('sups'));
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
            'supName' => 'required',
            'supAddr' => 'required',
            'supContact' => 'required',
            ]);
        $sup = supplier::find($id);
        $sup->supName = $request->supName;
        $sup->supAddr = $request->supAddr;
        $sup->supContact = $request->supContact;
        $sup->save();
         return redirect()->route('supplier.index')->with('success','Supplier updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         supplier::where('id',$id)->delete();
        return redirect()->back();
    }
}
