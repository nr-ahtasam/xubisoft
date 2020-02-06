<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\information;
class InformationController extends Controller
{
  function index(){
  return view('information/index');
  }
  function create(Request $request){
  information::insert([
      'name'          =>$request->name,
      'email'         =>$request->email,
      'project_name'  =>$request->project_name,
      'github'        =>$request->github,

  ]);
  return back();

  }


  function information_list()
  {

    $lists=information::paginate(2);
    return view('information/information_list',compact('lists'));

  }


}
