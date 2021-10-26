<?php

namespace App\Http\Controllers;
//class request
use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    public function create(){

return view('register');

    }

    public function store(Request $request){
        //die and dump (dd) means print and stop running script
        //dd($request);

        echo $request->name;
        //echo $request->email;
        //echo $request->password;
        //or use function input and send parameter to it in its argument
        echo $request->input('name');
        //to retreive all request data but retreive data as an array
        echo $request->all();
        //method except to retreive all data  except that inside function
        dd($request->except(['_token','password']));
        //function only takes inside it what you want only 
        dd($request->only(['name','email']));
     
     //to ensure that the request has this value or not
        dd($request->has('gender'));
        

        echo 'post data';
        
            }







}
