<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Skill;
use App\Work;
use App\Experience;
use Mail;
use Session;

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
        $profiles = User::inRandomOrder()->limit(3)->get();
//        return $profiles;
        $skills = Skill::distinct()->get();
        $works = Work::distinct()->get();
        $experiences = Experience::get();
        $categories = Work::inRandomOrder()->limit(3)->distinct('category')->pluck('category');
        $projects = Work::whereIn('category', $categories)->limit(9)->get();
//        return $projects;
        return view('home.home', compact('users', 'profiles', 'skills', 'works', 'experiences', 'categories', 'projects'));
    }
    
    public function panel(){
        $user = Auth::user();
        if($user->admin == 0){
            $panel = true;
            $educations = User::find($user->id)->educations;
            $experiences = User::find($user->id)->experiences;
            $skills = User::find($user->id)->skills;
            $works = User::find($user->id)->works;
            return view('portfolio.index', compact('user', 'panel', 'educations', 'experiences', 'skills', 'works'));
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
        $educations = User::find($user->id)->educations;
        $experiences = User::find($user->id)->experiences;
        $skills = User::find($user->id)->skills;
        $works = User::find($user->id)->works;
        return view('portfolio.index', compact('user', 'panel', 'educations', 'experiences', 'skills', 'works'));
    }

    public function admin()
    {
        $users = User::all();
        return view('admin.dashboard', compact('users'));
    }

    public function mail(Request $request)
    {
//        return 'working';
        Mail::to('thaque20@gmail.com')->send(new ContactMail($request));
        Session::flash('message', 'Your message has been mailed!');
        return redirect()->back();
    }
}
