<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Course_details;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert ;


class detailsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

        return view('dashboard.details.view');
    }

    public function view(Request $request){
        $course_id =$request->course_id;

        $course_details =DB::table('course_details')->where('course_id', '=' , $course_id) ->get();
        $u = auth()->user();

        return view('dashboard.details.view' , ['course_details'=>$course_details , 'title'=>'Course details', 'user'=>$u , 'course_id'=>$course_id ]);



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
            'type'=>'required',
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
        $details->course_id = $request->course_id;
        $details->save();
        if($details){
            Alert::toast('Added Successfully', 'Toast Type');

        }
        return redirect()->back();
    }



    public function delete($id){
        $data = Course_details::find($id);
        $data->delete();

        if($data){
            alert()->error('Delete','Material deleted successfully');
        }

        return redirect()->back();
    }



    public function update($id){
        $details =Course_details::where('id', '=' , $id) ->get();
        $u = auth()->user();



        // dd($course);
        return view('dashboard/details/update', ['data'=>$details , 'title'=>'UpdateCourse', 'user'=>$u]);

    }
    public function postUpdate(Request $request){


        $request->validate([
            'name'=>'required',
            'type'=>'required',

            'file_path'=>'mimes:pdf,doc,docx,ppt,pptx,txt,xls,xlsx',
            'course_id'=>'required',
        ]);
        $data= Course_details::find($request->id);

        $data->name = $request->name;
        $data->type = $request->type;

        if($request->file_path != null){

        $FileName = time().'-'. $request->name .'.'. $request->file_path->extension();
        $request->file_path->move(public_path('files'), $FileName);
        $data->file_path = $FileName;
        }


        $data->course_id = $request->course_id;
        $data->save();
        if($data){
            Alert::toast('Updated Successfully', 'Toast Type');

        }

        return redirect()->back();
    }








}
