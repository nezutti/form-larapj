<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Person;

class FormController extends Controller
{
    public function index(){
        return view("index");
    }


   
    public function thanks(Request $request){
    
    $items=$request->all();
    Person::create($items);

    return view("thanks");

}

}
