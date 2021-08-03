<?php

namespace App\Http\Controllers;

use App\Models\Course_details;
use Illuminate\Http\Request;

class detailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('dashboard.details.view');
    }

    public function insert(Request $request){
        $course_id = $request->course_id;
        $u = auth()->user();
        return view('dashboard.details.insert' , ['title'=>'addmaterials', 'user'=>$u , 'course_id'=>$course_id]);

    }
    public function postInsert(Request $request){

        $value=$request->validate([
            'name'=>'required',
            'type'=>'required',
            'link_text'=>'required',
            'file_path'=>'mimes:pdf,doc,docx,ppt,pptx,txt,xls,xlsx',
            'course_id'=>'required',
        ]);
        $details = new Course_details();

        if($request->file_path !=null){
            $FileName = time().'-'. $request->name .'.'. $request->file_path->extension();
            $request->file_path->move(public_path('files'), $FileName);
            $details->file_path = $FileName;
        }


        $details->name = $request->name;
        $details->type = $request->type;
        $details->link_text = $request->link_text;
        
        $details->course_id = $request->course_id;
        $details->save();
        return redirect()->back();
    }

    public function update(){

    }
    public function postUpdate(){

    }

    public function delete(){

    }






}
