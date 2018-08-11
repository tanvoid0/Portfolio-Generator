<?php

namespace App\Http\Controllers;

use PDF;
use App\User;
use Illuminate\Http\Request;


class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function show($username)
    {
        $user = User::where('username', $username)->first();
        if(!$user){
            return view('usernotfound');
        }
        $educations = User::find($user->id)->educations;
        $experiences = User::find($user->id)->experiences;
        $skills = User::find($user->id)->skills;
        $works = User::find($user->id)->works;

        return view('cv.includes.app', compact('user', 'panel', 'educations', 'experiences', 'skills', 'works'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function download($id){

        $user = User::find($id);
        $educations = User::find($user->id)->educations;
        $experiences = User::find($user->id)->experiences;
        $skills = User::find($user->id)->skills;
        $works = User::find($user->id)->works;
////        return 'done';
//        $pdf = \PDF::loadView('404', compact('user', 'educations', 'experiences', 'skills', 'works'));
//        return $pdf->downlaod('cv.pdf');
////        return view('cv.includes.app', compact('user', 'panel', 'educations', 'experiences', 'skills', 'works'));
//        return 'Working';

//        $data = ['title' => 'Welcome to HDTuto.com'];
//        return view('cv.index',  compact('user', 'educations', 'experiences', 'skills', 'works'));
        $pdf = PDF::loadView('cv.index', compact('user', 'educations', 'experiences', 'skills', 'works'));
//        $pdf = PDF::loadView('cv.index', compact('user', 'educations', 'experiences', 'skills', 'works'));


        return $pdf->download('cv.pdf');
    }
}
