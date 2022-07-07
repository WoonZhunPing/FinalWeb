<?php

namespace App\Http\Controllers;

use App\Models\subjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SubController extends Controller
{
    public function addSubject(Request $request){
        echo json_encode($request->all());
        $newSubject = new subjects();
        $newSubject->subject_Title = $request->subjectTitle;
        $newSubject->subject_Description = $request->description;
        $newSubject->subject_Price = $request->subjectPrice;
        $newSubject ->subject_Duration = $request->subjectDuration;
        $newSubject->save();
        return redirect('homePage')->with('save', 'Success')->withErrors('error','Failed');

    }

    public function homepage(){
        $newSubject = subjects::all();
        return view('homePage', compact('newSubject'));
    }

    

}


