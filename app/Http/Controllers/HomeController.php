<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Skill;
use App\Work;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $users = User::all();
        return view('home', compact('users'));
    }
    
    public function panel(){
        $user = Auth::user();
        $panel = true;
//        $descriptions = User::find($user->id)->descriptions;
        $experiences = User::find($user->id)->experiences;
        $skills = User::find($user->id)->skills;
        $works = User::find($user->id)->works;
        return view('portfolio.index', compact('user', 'panel', 'experiences', 'skills', 'works'));
        $descriptions = User::find($user->id)->descriptions;
        $experiences = User::find($user->id)->experiences;
        $skills = User::find($user->id)->skills;
        $works = User::find($user->id)->works;
        return view('user.index', compact('user','descriptions', 'experiences', 'skills', 'works'));


    }
    
    public function index($name){
        $panel = false;
        $user = User::where('name', $name)->first();
//        $descriptions = User::find($user->id)->descriptions;
        $experiences = User::find($user->id)->experiences;
        $skills = User::find($user->id)->skills;
        $works = User::find($user->id)->works;
        return view('portfolio.index', compact('user', 'panel', 'experiences', 'skills', 'works'));
    }

}
