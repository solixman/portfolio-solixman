<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{

  public function store( Request $request){
    try {
        $contactMessage = ContactMessage::create([
        'user_id'=>1,
        'name'=>$request->name,
        'email'=>$request->email,
        'message'=>$request->message,
        ]);
    
    } catch (\Throwable $th) {
        return back()->with(['error'=>'something went wrong']);
    }

  }
    
}
