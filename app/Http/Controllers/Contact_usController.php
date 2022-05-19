<?php

namespace App\Http\Controllers;


use App\Models\contactus;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\contact_request;

class Contact_usController extends Controller
{
    
    public function add_contact_us(Request $request){
        $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required|max:255|email',
            'phone' => 'required',
            'message' => 'required',
        ]);
    
        $contactModel = new contactus;
        $contactModel->fullname = $request->fullname;
        $contactModel->phone = $request->phone;
        $contactModel->email = $request->email;
        $contactModel->message = $request->message;
    
    
        if ($contactModel->save()) {
                
            $data = [
                'fullname' => $request->fullname,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ];
    
            
            $admins = user::where('level', 'Admin')->get();
            foreach ($admins as $Admin) {
                $Admin->notify(new contact_request($Admin, $data));
            }
            return $data;
        }
    
    }
    
}

