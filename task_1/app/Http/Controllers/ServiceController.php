<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service extends Controller
{
    public function serviceList(){
        $service = array();

        for($i=0; $i<5; $i++){
            $service = array(
                "name" => "service " . ($i+1),
                "id" =>"00" . ($i+1)

            );
            $services[] = (object)$service; 
        }

        return view('service.serviceList')->with('services', $services);
    }
    public function serviceEdit(Request $request){
        return $request->name;
    }

    public function serviceCreate(){
        return view('service.serviceCreate');
    }
    public function serviceCreateSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            "id"=>"required",
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
        ['name.required'=>"Please put you name here"]
    );
        return $request;
    }

}
