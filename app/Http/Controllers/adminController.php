<?php

namespace App\Http\Controllers;
use App\Models\Years;
use Illuminate\Http\Request;
use App\Models\Courses;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert ;


class adminController extends Controller
{
    public function index(){

        $data = years::all();
        return view('dashboard/index' , ['data'=>$data ,'title'=>'Dashboard']);
    }

    public function courses1(){
        $data = years::all();

        $course =DB::table('courses')->where('year_id', '=' , 1) ->get();

        return view('dashboard/courses' , ['data'=>$data , 'course'=>$course , 'title'=>'Courses']);
    }
    public function courses2(){
        $data = years::all();

        $course =DB::table('courses')->where('year_id', '=' , 2) ->get();

        return view('dashboard/courses' , ['data'=>$data , 'course'=>$course , 'title'=>'Courses']);
    }
    public function courses3(){
        $data = years::all();

        $course =DB::table('courses')->where('year_id', '=' , 3) ->get();

        return view('dashboard/courses' , ['data'=>$data , 'course'=>$course , 'title'=>'Courses']);
    }
    public function courses4(){

        $data = years::all();

        $course =DB::table('courses')->where('year_id', '=' , 4) ->get();

        return view('dashboard/courses' , ['data'=>$data , 'course'=>$course , 'title'=>'Courses']);
    }


    // courses fucntions
    public function InsertCourse(){
        return view('dashboard/course', ['title'=>'CourseUpload']);
    }

    public function PostInsertCourse(Request $request){

        // Methods we can use on $request
        // guessExtencion()
        // getMimeType()
        // store()
        // asStore()
        // storePublicly()
        // move()
        // getClientOriginalName();
        // getClientMimeType()
        // getClientExtension()
        // getSize()
        // getError()
        // isValid()


        // $test = $request->file('image')->getSize();
        // dd($test);

        $value=$request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'year_id'=>'required',
        ]);

        $newImageName = time(). '-'. $request->name . '.' . $request->image->extension();
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
        return redirect('/dashboard/SecondYear');
    }

    public function deleteCourse($id){
        $data = Courses::find($id);
        $data->delete();
        return redirect('/dashboard');
    }
    public function showCourse($id){
        $course =Courses::where('id', '=' , $id) ->get();
        // dd($course);
        return view('dashboard/updatecourse', ['data'=>$course , 'title'=>'UpdateCourse']);
    }

    public function updateCourse(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'year_id'=>'required',
        ]);

        $data= Courses::find($request->id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->image_path = $request->image;
        $data->year_id = $request->year_id;
        $data->save();

        return redirect('/dashboard/courses');


    }
    // Enf of courses functions
}
