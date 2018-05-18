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
        if($user->admin == 0){
            $panel = true;
            $experiences = User::find($user->id)->experiences;
            $skills = User::find($user->id)->skills;
            $works = User::find($user->id)->works;
            return view('portfolio.index', compact('user', 'panel', 'experiences', 'skills', 'works'));
            $descriptions = User::find($user->id)->descriptions;
            $experiences = User::find($user->id)->experiences;
            $skills = User::find($user->id)->skills;
            $works = User::find($user->id)->works;
            return view('user.index', compact('user','descriptions', 'experiences', 'skills', 'works'));
        } else {
            $users = User::all();
            return view('admin.dashboard', compact('users'));
        }


    }
    
    public function index($username){
        $panel = false;
        $user = User::where('username', $username)->first();
        if(!$user){
            return view('usernotfound');
        }
        $experiences = User::find($user->id)->experiences;
        $skills = User::find($user->id)->skills;
        $works = User::find($user->id)->works;
        return view('portfolio.index', compact('user', 'panel', 'experiences', 'skills', 'works'));
    }

    public function admin()
    {
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

}
