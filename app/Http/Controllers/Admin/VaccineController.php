<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\supplier;
use App\vaccine;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacs = vaccine::all();
        return view('vaccine.show',compact('vacs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {           
        $sups =supplier::all();
        return  view('vaccine.vaccine',compact('sups'));
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
            'vacName' => 'required',
            'vacPrice' => 'required',
            'vacStock' => 'required',
            'vacSup' => 'required',
            ]);
        $vac = new vaccine;
        $vac->vacName = $request->vacName;
        $vac->vacPrice = $request->vacPrice;
        $vac->vacStock = $request->vacStock;
        $vac->vacSup = $request->vacSup;
        $vac->save();

        return redirect(route('vaccine.index'));
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
        $vacs = vaccine::where('id',$id)->first();
        return  view('vaccine.edit',compact('sups','vacs'));



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
            'vacName' => 'required',
            'vacPrice' => 'required',
            'vacStock' => 'required',
            'vacSup' => 'required',
            ]);
        $vac = vaccine::find($id);
        $vac->vacName = $request->vacName;
        $vac->vacPrice = $request->vacPrice;
        $vac->vacStock = $request->vacStock;
        $vac->vacSup = $request->vacSup;
        $vac->save();

        return redirect(route('vaccine.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        vaccine::where('id',$id)->delete();
        return redirect()->back();
    }
}
