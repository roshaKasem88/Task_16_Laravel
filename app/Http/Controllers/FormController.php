<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create(){

        return view('Form');
        
            }
    
            public function getData(Request $request){
                # validate input Data
        
                $this-> validate($request,[
                    "name" => "required",
                    "email" => "required | email",
                    "password" => "required | min:6",
                    "address"  => "required | min:10",
                    "linkedin" => "required | url",
                    "gender" => "required"
                ]);
        
                dd("Valid Data");
            }
        





}
