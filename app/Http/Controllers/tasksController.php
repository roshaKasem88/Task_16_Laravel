<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasks extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct(){

        $this->middleware('userCheck');
    }

    public function index()
    {
        $login=auth()->users()->id;
        $users_data=users::where('id',$login)->get();
        $user_name=$users_data[0]->name;
        
        $data=tasks::where('id',$login)->get();
        return view('tasks.index',['data'=> $data, 'username' => $user_name]);




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=auth()->user()->id;
        $data=$this->validate($request,[
            'title' => "required",
            'description' => "required |min:10",
            'start_date' =>"required",
            'end_date' =>"required"
        ]);
        $data['start_date']=strtotime($data['start_date']);
        $data['end_date']=strtotime($data['end_date']);
        $data['id']=$id;
     

        $op=taskModel::create($data);
        if($op){
            $message = "Task is already done";
        }else{
            $message = "Error in your Task... Try Again!!";
        }

        return redirect(url('/tasks'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $Taskdata = tasks::where('task_id',$id)->get();

        return view('tasks.edit',['tasks' => $Taskdata]);


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
        $data=$this->validate($request,[
            'title' => "required",
            'description' => "required |min:10",
            'start_date' =>"required",
            'end_date' =>"required"
        ]);
        $data['start_date']=strtotime($data['start_date']);
        $data['end_date']=strtotime($data['end_date']);
        
        $op=tasks::where('task_id',$id)->update($data);
        if($op){
            $message = "Task is edited";
        }else{
            $message = "Error editing your  Task. try again!";
        }
        session()->flash('Message',$message);
        return redirect(url('/tasks')); 



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data=tasks::where('task_id',$id)->get();
        
        $current_time=time();
        if($data[0]->end_date > $current_time){
            $op=tasks::where('task_id',$id)->delete();

            if($op){
                $message="Task is Deleted";
            }else{
                $message="Error !";

            }
            
        }else
        {
            $message="can't Submit";
        }
        session()->flash('Message',$message);
            return back();
    }


    }
}
