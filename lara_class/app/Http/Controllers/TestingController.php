<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
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
  public function index(){
    //   return view("ours");
    $student=array(array(
        'name'=>'Taiwo',
        'age'=>10,
        'color'=>'black'
    ),
    array(
        'name'=>'Gblack',
        'age'=>20,
        'color'=>'black'
    )
    );
        
 
      return view("pages.ours")->with("student",$student);
  }
  public function about(){
    return view('pages.about');
}
public function gallary(){
    return view('pages.gallary');
}
public function register(){
    return view('pages.register');
}
}
