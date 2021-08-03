<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use App\Models\Years;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert ;
use Illuminate\Support\Facades\DB;




class coursesController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function courses(Request $request){

        $year_id = $request->year_id;

        $years = years::all();

        $u = auth()->user();

        $course =DB::table('courses')->where('year_id', '=' , $year_id) ->get();

        return view('dashboard/courses/view' , ['years'=>$years , 'course'=>$course , 'title'=>'Courses' , 'user'=>$u]);
    }

    public function InsertCourse(){
        $u = auth()->user();
        return view('dashboard/courses/insert', ['title'=>'CourseUpload', 'user'=>$u]);
    }

    public function PostInsertCourse(Request $request){
        $value=$request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'year_id'=>'required',
        ]);


        $newImageName = time(). '-'. 'year'.$request->year_id . '.' . $request->image->extension();
        $request->image->move(public_path('img'), $newImageName);

        $course =new Courses();

        $course->name = $request->name;
        $course->description =$request->description;
        $course->image_path = $newImageName;
        $course->year_id = $request->year_id;
        $course->save();

        if($course){
            Alert::toast('تمت اضافة الكورس بنجاح ', 'Toast Type');

        }
        return redirect(url('dashboard/courses/addcourse'));
    }


    public function deleteCourse($id){
        $data = Courses::find($id);
        $data->delete();

        if($data){
            alert()->question('Title','Lorem Lorem Lorem');
        }

        return redirect(url('dashboard'));
    }



    public function showCourse($id){
        $course =Courses::where('id', '=' , $id) ->get();
        $u = auth()->user();

        // dd($course);
        return view('dashboard/courses/update', ['data'=>$course , 'title'=>'UpdateCourse', 'user'=>$u]);
    }

    public function updateCourse(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'year_id'=>'required',
        ]);



        $data= Courses::find($request->id);
        $data->name = $request->name;
        $data->description = $request->description;
        if($request->image != null){

            $newImageName = time(). '-'. 'year'.$request->year_id . '.' . $request->image->extension();
            $request->image->move(public_path('img'), $newImageName);

            $data->image_path =  $newImageName;
        }
        $data->year_id = $request->year_id;
        $data->save();



        return redirect(url('dashboard/FirstYear'));
    }




    public function subject(){
        $course = courses::all();
        return view('dashboard/subject' , ['title'=>'subject' , 'course'=>$course]);
    }

}
