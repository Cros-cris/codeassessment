<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\codeassessment;

class codeassessmentcontroller extends Controller{

  public function index () {

    $codeassessments = codeassessment::all();
  
    return view('index',[
      'codeassessments' => $codeassessments
    ]);

  }

  public function create(){

    return view('create');

}

public function store(){
  $code = new codeassessment();

    $code->naam = request('naam');
    $code->email = request('email');
    $code->afstand = request('afstand');

      $code->save();

        return redirect('/code/');

      }


}
