<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\admin;
use Illuminate\Http\Request;

class AdminCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $userAdmins = admin::all();
        return view('admin.register.showAdmin',compact('userAdmins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return  view('admin.register.registerAdmin');
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
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
            ]);
        $userAdmin = new admin;
        $userAdmin->name = $request->name;
        $userAdmin->email = $request->email;
        $userAdmin->password = bcrypt($request['password']);
        $userAdmin->save();

        return redirect(route('admin.index'));
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
        $userAdmins = admin::where('id',$id)->first();
        return view('admin.register.editAdmin',compact('userAdmins'));
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
        $userAdmin = admin::find($id);
        $userAdmin->name = $request->name;
        $userAdmin->email = $request->email;
        $userAdmin->password = bcrypt($request['password']);
        $userAdmin->save();

        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        admin::where('id',$id)->delete();
        return redirect()->back();
    }
}

