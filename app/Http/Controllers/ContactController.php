<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

  public function store( Request $request){
    try {
      
       $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        $contactMessage = ContactMessage::create([
        'user_id'=>1,
        'name'=>$data['name'],
        'email'=>$data['email'],
        'message'=>$data['message'],
        ]);
        Mail::raw(
          "📩 New message from {$data['name']} ({$data['email']}):\n\n{$data['message']}",
          function ($mail) use ($data) {
            $mail->to('sousouja06@gmail.com') 
            ->subject("New Portfolio Contact Message");
          }
        );
        
        dd($contactMessage);
    return back()->with(['succes'=>'message was sent succesfully']);
    } catch (Exception $e) {
        return $e->getMessage();
    }

  }
    
}
