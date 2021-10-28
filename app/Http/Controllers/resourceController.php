<?php

namespace App\Http\Controllers;
use App\Models\tasks;
use App\Models\users;

use Illuminate\Http\Request;

class resourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    
        }
        //
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  $this->validate($request,[
            "name"     => "required|min:3",
            "email"    => "required|email",
            "password" => "required|min:6|max:10",
            "task_id"  => "required"
          ]);
          $data['password'] = bcrypt($data['password']);

    # Store Data ...  
      $op = users::create($data);

      if($op){
          $message = "Data Inserted";
      }else{
          $message = "Error Try Again!!";
      }

    # Set Message To Session .... 
    session()->flash('Message',$message);
    
    return redirect(url('/users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function show($id)
    {
        echo 'Show Function';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */





    public function edit($id)
    {


    }





    public function LoginView(){
        return view('login');
    }






    public function login(Request $request){
   
       $data = $this->validate($request,[

        "email" => "required|email",
        "password" => "required|min:6"
       ]);


      if(auth('user')->attempt($data))
      {

      return redirect(url('/tasks'));
      }else{

         return redirect(url('/Login'));
   }

    }


    public function LogOut(){

        auth()->guard('user')->logout();
    
        return redirect(url('/Login'));
          
       }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        //
    }







}
