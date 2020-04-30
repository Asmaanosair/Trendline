<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class admincontroller extends Controller
{
    function index(){
        return view('admin.dashboard');
    }
      public function chang(){
     

        return view('admin.chang');
    }
    
        function chang_pass(Request $request ,$id){

        $this->validate($request,
            [
                 'email' => 'required',
                
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'required|min:6',

            ]);


        $test=User::find($id);
          $test->email=$request['email'];
        $test->password=Hash::make($request['password']);
        if($test->save()){
            return redirect('/logout');
        }
        
       }
}
