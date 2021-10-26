<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class BlogController extends Controller
{

    //
    public function create(){

        return view('register');
        
            }

public function store_data(Request $request)
{
$title=$request->input('title');
if(empty($title))
{
echo "Title Field Required";

}
$content=$request->input('content');

if(empty($content)){
    echo "Content Field Required";
    
    }
    elseif(strlen($content) > 30 ){
        echo "Content Field must be more than 30 characters";

    }


}





}
