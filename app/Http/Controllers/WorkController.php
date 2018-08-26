<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use Illuminate\Support\Facades\Input;
use App\User;
use Auth;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $works = User::find($id)->works;
        return view('panel.work.view', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.work.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request;
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
        ]);
        $work = new Work;
        $work->user_id = Auth::id();
        $work->title = $request->title;
        if(Input::hasFile('image')){
            $file = Input::file('image');
            $file->move('img/work/', $file->getClientOriginalName());
            $work->image = $file->getClientOriginalName();
        } else {
            $work->image = 'work.jpg';
        }
        $work->category = $request->category;
        $work->description = $request->description;
        $work->link = $request->link;
        $work->save();
        session (['msg' => "Work Has Been ", "action" => "Added", "type" => "success"]);

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
        $work = Work::find($id);
        return view('panel.work.edit', compact('work'));
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
            'title' => 'required',
//            'image' => 'required',
        ]);
        $work = Work::find($id);
        $work->title = $request->title;
        if(Input::hasFile('image')){
            $file = Input::file('image');
            $file->move('img/work/', $file->getClientOriginalName());
            $work->image = $file->getClientOriginalName();
        }
        $work->category = $request->category;
        $work->description = $request->description;
        $work->link = $request->link;
        $work->save();
        session (['msg' => "Work Has Been ", "action" => "Updated", "type" => "info"]);

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
        Work::find($id)->delete();
        session (['msg' => "Work Has Been ", "action" => "Deleted", "type" => "danger"]);

        return redirect(route('dashboard'));
    }
}
