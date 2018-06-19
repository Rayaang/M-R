<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\doctor;
use Illuminate\Http\Request;

class DoctorCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userDocs = doctor::all();
        return view('admin.register.showDoctor',compact('userDocs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return  view('admin.register.registerDoctor');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:doctors',
            'password' => 'required|string|min:6|confirmed',
            ]);
        $userDoc = new doctor;
        $userDoc->name = $request->name;
        $userDoc->email = $request->email;
       $userDoc->password = bcrypt($request['password']);
        $userDoc->save();

        return redirect(route('doctor.index'));
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
        $userDocs = doctor::where('id',$id)->first();
        return view('admin.register.editDoctor',compact('userDocs'));
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
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            ]);
        $userDoc = doctor::find($id);
        $userDoc->name = $request->name;
        $userDoc->email = $request->email;
        $userDoc->password = bcrypt($request['password']);
        $userDoc->save();

        return redirect(route('doctor.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        doctor::where('id',$id)->delete();
        return redirect()->back();
    }
}
