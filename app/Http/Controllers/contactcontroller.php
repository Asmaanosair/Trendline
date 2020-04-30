<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\email;
use App\phone;
use App\branch;

class contactcontroller extends Controller
{
    function index()
    {
        $con = contact::all();
        $email = email::all();
        $phone = phone::all();
        $branch = branch::all();
        return view('admin.contact.contact', compact('con', 'email', 'phone','branch'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'fb' => 'required',
                'tw' => 'required',
                'yt' => 'required',
                'in' => 'required',
                'web' => 'required',
                'insta' => 'required',
                'loc' => 'required',
                 'img'=>'dimensions:min_width=1600,min_height=700|mimes:jpeg,bmp,png'
            ]);
        $con = contact::find($id);

        $con->fb = $request->fb;
        $con->tw = $request->tw;
        $con->yt = $request->yt;
        $con->in = $request->in;
        $con->web = $request->web;
        $con->location = $request->loc;
        $con->insta = $request->insta;
        
          if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $con->logo=$filname1;
        }


        if($con->save()){

            return back();
        }
    }



    public function email_update(Request $request, $id)
    {
        $this->validate($request,
            [
                'mail' => 'required|max:200',

            ]);
        $con = email::find($id);
        $con->email = $request->mail;

        if($con->save()){

            return back();
        }
    }

    public function add_email(Request $request)
    {
        $this->validate($request,
            [
                'mail' => 'required|max:200',

            ]);
        $con =  new email();
        $con->email = $request->mail;

        if($con->save()){

            return back();
        }
    }
    public function add_phone(Request $request)
    {
        $this->validate($request,
            [
                'ph' => 'required|max:200',
                 'name' => 'required',

            ]);
        $con =  new phone();
        $con->phone = $request->ph;
         $con->title = $request->name;

        if($con->save()){

            return back();
        }
    }

    public function phone_update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'ph' => 'required',

            ]);
        $con = phone::find($id);
        $con->phone = $request->ph;
          $con->title = $request->name;


        if($con->save()){

            return back();
        }
    }
    function delete_phone($id){
        $section=phone::find($id);
        $section->delete();
        return redirect()->back();
    }
    function delete_mail($id){
        $section=email::find($id);
        $section->delete();
        return redirect()->back();
    }
    public function add_branch(Request $request)
    {
        $this->validate($request,
            [
                'branch' => 'required',
                'branch_ar' => 'required',
                
                 'email' => 'required',
                'phone' => 'required',
                
                 'what' => 'required',
                
                 'office' => 'required',

            ]);
        $con =  new branch();
        $con->address = $request->branch;
        $con->address_ar = $request->branch_ar;
        
         $con->email = $request->email;
        $con->phone = $request->phone;
 $con->whats = $request->what;
        $con->office = $request->office;
        if($con->save()){

            return back();
        }
    }

    public function branch_update(Request $request, $id)
    {
        $this->validate($request,
            [
                'branch' => 'required',
                'branch_ar' => 'required',
                  'email' => 'required',
                'phone' => 'required',
                
                 'what' => 'required',
                
                 'office' => 'required',


            ]);
        $con = branch::find($id);
        $con->address = $request->branch;
        $con->address_ar = $request->branch_ar;
            $con->email = $request->email;
        $con->phone = $request->phone;
 $con->whats = $request->what;
        $con->office = $request->office;

        if($con->save()){

            return back();
        }
    }
    function delete_branch($id){
        $section=branch::find($id);
        $section->delete();
        return redirect()->back();
    }

}
