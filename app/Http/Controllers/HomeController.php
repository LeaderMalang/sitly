<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function webRole(){
        return view('webrole');
    }
    public function genderBirthday(){
        return view('babysitter.gender-birthday');
    }
    public function addressSelector(){
        return view('babysitter.address-selector');
    }
    public function babysitterAbout(){
        return view('babysitter.about');
    }
    public function nativeLanguage(){
        return view('babysitter.native-language');
    }
    public function otherLanguage(){
        return view('babysitter.other-language');
    }
    public function babysitterTraits(){
        return view('babysitter.traits');
    }
    public function babysitterSmoke(){
        return view('babysitter.smoke');
    }
    public function babysitterOccupation(){
        return view('babysitter.occupation');
    }
}
