<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\userr;
use Illuminate\Http\Request;

class UserCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userUsers = userr::all();
        return view('admin.register.showUser',compact('userUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return  view('admin.register.registerUser');
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
            'email' => 'required|string|email|max:255|unique:userrs',
            'password' => 'required|string|min:6|confirmed',
            ]);
        $userUser = new userr;
        $userUser->name = $request->name;
        $userUser->email = $request->email;
        $userUser->password = bcrypt($request['password']);
        $userUser->save();

        return redirect(route('user.index'));
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
        $userUsers = userr::where('id',$id)->first();
        return view('admin.register.editUser',compact('userUsers'));
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
        $userUser = userr::find($id);
        $userUser->name = $request->name;
        $userUser->email = $request->email;
        $userUser->password = $request->password;
        $userUser->save();

        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        userr::where('id',$id)->delete();
        return redirect()->back();
    }
}
