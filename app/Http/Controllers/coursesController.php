<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use App\Models\Years;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert ;
use Illuminate\Support\Facades\DB;



class coursesController extends Controller
{
    

    public function courses1(){
        $data = years::all();

        $course =DB::table('courses')->where('year_id', '=' , 1) ->get();

        return view('dashboard/courses/viewfst' , ['data'=>$data , 'course'=>$course , 'title'=>'Courses']);
    }
    public function courses2(){
        $data = years::all();

        $course =DB::table('courses')->where('year_id', '=' , 2) ->get();

        return view('dashboard/courses/viewscnd' , ['data'=>$data , 'course'=>$course , 'title'=>'Courses']);
    }
    public function courses3(){
        $data = years::all();

        $course =DB::table('courses')->where('year_id', '=' , 3) ->get();

        return view('dashboard/courses/viewthrd' , ['data'=>$data , 'course'=>$course , 'title'=>'Courses']);
    }
    public function courses4(){

        $data = years::all();

        $course =DB::table('courses')->where('year_id', '=' , 4) ->get();

        return view('dashboard/courses/viewfrth' , ['data'=>$data , 'course'=>$course , 'title'=>'Courses']);
    }


    public function InsertCourse1(){
        return view('dashboard/courses/insertfst', ['title'=>'CourseUpload']);
    }
    public function InsertCourse2(){
        return view('dashboard/courses/insertscnd', ['title'=>'CourseUpload']);
    }
    public function InsertCourse3(){
        return view('dashboard/courses/insertthrd', ['title'=>'CourseUpload']);
    }
    public function InsertCourse4(){
        return view('dashboard/courses/insertfrth', ['title'=>'CourseUpload']);
    }

    public function PostInsertCourse1(Request $request){


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
        return redirect(url('dashboard/FirstYear'));
    }
    public function PostInsertCourse2(Request $request){

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
        return redirect('/dashboard/SecondYear');
    }
    public function PostInsertCourse3(Request $request){

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
        return redirect('/dashboard/ThirdYear');
    }
    public function PostInsertCourse4(Request $request){

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
        return redirect('/dashboard/FourthYear');
    }

    public function deleteCourse1($id){
        $data = Courses::find($id);
        $data->delete();
        return redirect(url('dashboard/FirstYear'));
    }
    public function deleteCourse2($id){
        $data = Courses::find($id);
        $data->delete();
        return redirect(url('dashboard/SecondYear'));
    }
    public function deleteCourse3($id){
        $data = Courses::find($id);
        $data->delete();
        return redirect(url('dashboard/ThirdYear'));
    }
    public function deleteCourse4($id){
        $data = Courses::find($id);
        $data->delete();
        return redirect(url('dashboard/FourthYear'));
    }


    public function showCourse1($id){
        $course =Courses::where('id', '=' , $id) ->get();
        // dd($course);
        return view('dashboard/courses/updatefst', ['data'=>$course , 'title'=>'UpdateCourse']);
    }
    public function showCourse2($id){
        $course =Courses::where('id', '=' , $id) ->get();
        // dd($course);
        return view('dashboard/courses/updatescnd', ['data'=>$course , 'title'=>'UpdateCourse']);
    }
    public function showCourse3($id){
        $course =Courses::where('id', '=' , $id) ->get();
        // dd($course);
        return view('dashboard/courses/updatethrd', ['data'=>$course , 'title'=>'UpdateCourse']);
    }
    public function showCourse4($id){
        $course =Courses::where('id', '=' , $id) ->get();
        // dd($course);
        return view('dashboard/courses/updatefrth', ['data'=>$course , 'title'=>'UpdateCourse']);
    }

    public function updateCourse1(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'year_id'=>'required',
        ]);

        $newImageName = time(). '-'. 'year'.$request->year_id . '.' . $request->image->extension();

        $data= Courses::find($request->id);
        $data->name = $request->name;
        $data->description = $request->description;
        if($request->image){
            $data->image_path = $request->image;
        }else{
            $data->image_path= $newImageName;
        }
        $data->year_id = $request->year_id;
        $data->save();

        return redirect(url('dashboard/FirstYear'));
    }
    public function updateCourse2(Request $request){
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

        return redirect(url('dashboard/SecondYear'));
    }
    public function updateCourse3(Request $request){
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

        return redirect(url('dashboard/ThirdYear'));
    }
    public function updateCourse4(Request $request){
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

        return redirect(url('dashboard/FourthYear'));
    }




    public function subject(){
        $course = courses::all();
        return view('dashboard/subject' , ['title'=>'subject' , 'course'=>$course]);
    }

}
