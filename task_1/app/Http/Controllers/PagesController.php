<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $welcome = "As salamu ali kum ,";

        return view('home')->with('welcome', $welcome);
    }

    public function profile(){
        $name = "TIGER it";
        $id="11-11111-1";
        $dob = "10-10-2010";
        $names=array("Developing and maintaining Computer software ", "Developing and maintaining  Mobile apps", "Marketing");
        return view('service')
        ->with('name', $name)
        ->with('id', $id)
        ->with('names', $names)
        ->with('dob', $dob);
      
      
    }


    public function our_team()
    {
        $names=array("1.Mehedi Hassan Tushar", "2.Imon Fysal", "3.Esrajul Haque Efti","4.Ismail Hossain Pranto");
        return view('our_team')
        ->with('names', $names);
        
    }
    public function about_us()
    {
        $names=array("our goal is to continously serving our clints with best services of the market", "reach the highest quality is the main aim of our company");
        return view('about_us')
        ->with('names', $names);
        
    }
    public function contact_us()
    {
        $names=array("xcjtushar@gmail.com", "abc@gmail.com");
        return view('contact_us')
        ->with('names', $names);
        
    }
    
    
}
