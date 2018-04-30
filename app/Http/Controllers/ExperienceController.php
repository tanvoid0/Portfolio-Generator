<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
use Auth;
use App\User;
class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $experiences = User::find($user->id)->experiences;
        return view('panel.experience.view', compact('experiences', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.experience.create');

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
            'role' => 'required',
        ]);
        $experience = new Experience;
        $experience->user_id = Auth::id();
        $experience->role = $request->role;
        $experience->company = $request->company;
        $experience->description = $request->description;
        $experience->start_year = $request->start_year;
        $experience->end_year = $request->end_year;
        $experience->save();
        session (['msg' => "Experience Has Been ", "action" => "Added", "type" => "success"]);

        return redirect(route('dashboard'));
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
        $experience = Experience::find($id);
        return view('panel.experience.edit', compact('experience'));
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
            'role' => 'required',
        ]);
        $experience = Experience::find($id);
        $experience->role = $request->role;
        $experience->company = $request->company;
        $experience->description = $request->description;
        $experience->start_year = $request->start_year;
        $experience->end_year = $request->end_year;
        $experience->save();
        session (['msg' => "Experience Has Been ", "action" => "Updated", "type" => "info"]);

        return redirect(route('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Experience::find($id)->delete();
        session (['msg' => "Experience Has Been ", "action" => "Deleted", "type" => "danger"]);

        return redirect()->back();
    }
}
