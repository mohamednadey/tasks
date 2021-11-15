<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class studenController extends Controller
{
    

  public function index()
{
  $tasks=  DB::table('tasks')->get();
  return view ('tasks',compact('tasks'));
}

   public function store(request $request )
   {
    $task = DB::table('tasks')->insert([

      'name' => $request->name,
      'created_at'=> now(),
       'updated_at'=> now(),

    ]);
    return 'store';

   }
   
}


