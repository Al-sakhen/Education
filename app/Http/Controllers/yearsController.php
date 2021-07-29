<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Years;
use RealRashid\SweetAlert\Facades\Alert;


class yearsController extends Controller
{

public function InsertName(){
    return view('dashboard/years');
}

public function PostInsertName(Request $request){
    $value=$request->validate([
        'name'=>'required',
    ]);

    $year = new Years();
    $year->name = $request->name;
    $year->save();
    if($year){
        Alert::toast('تمت اضافة السنة بنجاح ', 'Toast Type');
    }
    return redirect('year');
}





}
