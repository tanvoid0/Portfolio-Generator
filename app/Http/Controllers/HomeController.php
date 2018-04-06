<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Skill;
use App\Work;

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
        if(Auth::user()){
            return redirect(route('dashboard'));
        }
        return view('home');
    }
    
    public function panel(){
        $user = Auth::user();
//        $skills = Skill::find($user->id);
//        $works = Work::find($user->id);
        return view('panel.dashboard', compact('user'));
    }
    
    public function index($username){
        $user = User::where('username', $username)->first();
        $descriptions = User::find($user->id)->descriptions;
        $experiences = User::find($user->id)->experiences;
        $skills = User::find($user->id)->skills;
        $works = User::find($user->id)->works;
        return view('portfolio.index', compact('user','descriptions', 'experiences', 'skills', 'works'));
    }
}
