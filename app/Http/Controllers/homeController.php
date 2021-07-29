<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class homeController extends Controller
{
public function index(){

    return view('index');
}

public function inner_page(){

    return view('inner_page');
    }

public function subject_details(Request $request){
    $subjects = Subjects::where('course_id', '=' , $request->id)->with('course') ->get();
    foreach($subjects as $s){
    dd($s->course->name);
    }

    return view('subject_details');
}


public function FstYear(){
    $course =DB::table('courses')->where('year_id', '=' , 1) ->get();

    return view('FstYear', ['course'=>$course]);
}

public function ScndYear(){
    $course =DB::table('courses')->where('year_id', '=' , 2) ->get();

    return view('ScndYear', ['course'=>$course]);
}


public function ThrdYear(){
    $course =DB::table('courses')->where('year_id', '=' , 3) ->get();

    return view('ThrdYear', ['course'=>$course]);
}


public function FrthYear(){
    $course =DB::table('courses')->where('year_id', '=' , 4) ->get();

    return view('FrthYear', ['course'=>$course]);
}
}
