<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $educations = User::find($user->id)->educations;
        return view('panel.education.view', compact('educations', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.education.create');

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
            'institution' => 'required',
            'degree' => 'required'
        ]);
        $education = new Education;
        $education->user_id = Auth::id();
        $education->institution = $request->institution;
        $education->degree = $request->degree;
        $education->gpa = $request->gpa;
        $education->scale = $request->scale;
        $education->description = $request->description;
        $education->start_year = $request->start_year;
        $education->end_year = $request->end_year;
        $education->save();
        session (['msg' => "Education Has Been ", "action" => "Added", "type" => "success"]);
        return redirect()->back();

//        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $id)
    {
        $education = Education::find($id);
        return view('panel.education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'institution' => 'required',
            'degree' => 'required'
        ]);
        $education = Education::find($id);
        $education->institution = $request->institution;
        $education->degree = $request->degree;
        $education->gpa = $request->gpa;
        $education->scale = $request->scale;
        $education->description = $request->description;
        $education->start_year = $request->start_year;
        $education->end_year = $request->end_year;
        $education->save();
        session (['msg' => "Education Has Been ", "action" => "Updated", "type" => "info"]);
        return redirect()->back();

//        return redirect(route('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Education::find($id)->delete();
        session (['msg' => "Education Has Been ", "action" => "Deleted", "type" => "danger"]);

        return redirect()->back();
    }
}
