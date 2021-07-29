<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert ;


class coursesController extends Controller
{

    // public function InsertCourse(){
    //     return view('dashboard/course', ['title'=>'InsertCourse']);
    // }

    // public function PostInsertCourse(Request $request){

    //     // Methods we can use on $request
    //     // guessExtencion()
    //     // getMimeType()
    //     // store()
    //     // asStore()
    //     // storePublicly()
    //     // move()
    //     // getClientOriginalName();
    //     // getClientMimeType()
    //     // getClientExtension()
    //     // getSize()
    //     // getError()
    //     // isValid()


    //     // $test = $request->file('image')->getSize();
    //     // dd($test);

    //     $value=$request->validate([
    //         'name'=>'required',
    //         'description'=>'required',
    //         'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
    //         'year_id'=>'required',
    //     ]);

    //     $newImageName = time(). '-'. $request->name . '.' . $request->image->extension();
    //     $request->image->move(public_path('img'), $newImageName);


    //     $course =new Courses();
    //     $course->name = $request->name;
    //     $course->description =$request->description;
    //     $course->image_path = $newImageName;
    //     $course->year_id = $request->year_id;
    //     $course->save();

    //     if($course){
    //         Alert::toast('تمت اضافة الكورس بنجاح ', 'Toast Type');

    //     }
    //     return redirect('/dashboard/courses');
    // }




    public function subject(){
        $course = courses::all();
        return view('dashboard/subject' , ['title'=>'subject' , 'course'=>$course]);
    }

}
