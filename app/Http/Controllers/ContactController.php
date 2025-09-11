<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Exception;
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
    return back()->with(['succes'=>'message was sent succesfully']);
    } catch (Exception $e) {
        return back()->with(['error'=>'something went wrong']);
    }

  }
    
}
