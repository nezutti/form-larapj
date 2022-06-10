<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Person;

class FormController extends Controller
{
    public function index(){
        return view("index");
    }


    public function data(Request $request){

    $this->validate($request,$rules);
     $items=$request->all();
     Person::create($items);
     return redirect("/thanks");
    }


   
    public function thanks(){
    
   

    return view("thanks");

}

}
