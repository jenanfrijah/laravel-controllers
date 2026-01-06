<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectController extends Controller
{
public static $contacts =[];

public function create(){
    return view('connect/index');
}

public function store(Request $request){

    //recive data
    $name=$request->name;
    $email=$request->email;
    $message=$request->message;

    //save it into static array 
    self::$contacts[]=[
        'name'=>$name,
        'email'=>$email,
        'message'=>$message
    ];

  //save it into session 
    $allContacts = session()->get('all_contacts', []);
    $allContacts[] = [
        'name' => $name,
        'email' => $email,
        'message' => $message
        ];
    session()->put('all_contacts', $allContacts);

return redirect()->route('connect.result');

}

 public function result()
{
    $contacts = session()->get('all_contacts', []);
    return view('connect/result', compact('contacts'));
    }



}