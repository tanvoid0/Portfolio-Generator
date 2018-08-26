<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $user = Auth::user();
//        return view('panel.user.view', compact('user'));

        $users = User::all();
        return view('home.user', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user = Auth::user();
        return view('panel.user', compact('user'));

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
        $user = Auth::user();
        return view('panel.user.edit', compact('user'));
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
        $user = User::find($id);

        if(Input::hasFile('image')){
            $file = Input::file('image');
            $file->move('img/user/', $file->getClientOriginalName());
            $user->image = $file->getClientOriginalName();
        }
        if ($request->name != ""){
            $user->name = $request->name;
        }
        if($request->designation != ""){
            $user->designation = $request->designation;
        }
        if($request->description != ""){
            $user->description = $request->description;
        }
        if($request->address != ""){
            $user->address = $request->address;
        }
        if($request->phone != ""){
            $user->phone = $request->phone;
        }
        if($request->email != ""){
            $user->email = $request->email;
        }
        if($request->web != ""){
            $user->web = $request->web;
        }
        if($request->fb != ""){
            $user->fb = $request->fb;
        }
        if($request->fb != ""){
            $user->fb = $request->fb;
        }


//        $user->dob = $request->dob;
//        $user->phone = $request->phone;
//        $user->address = $request->address;
//        $user->web = $request->web;
//        $user->fb = $request->fb;
//        $user->email = $request->email;
//        $user->username = $request->username;
        $user->save();
        session (['msg' => "Bio Has Been ", "action" => "Updated", "type" => "info"]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}
