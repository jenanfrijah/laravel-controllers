<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
//
public function dashboard(){
$title="Admin Dashboard";
$userCount=120;
//using compact 
// return view ('admin.dashboard',compact('title','userCount'));
// }
//using with
return view('admin.dashboard')
->with('title',$title)
->with('userCount',$userCount);
//using key=>value

// return view('admin.dashboard',[
//     'title'=>$title,
//     'userCount'=>$userCount
// ]);
// }
}
public function reports(){
        return view('admin.reports');
    }
}