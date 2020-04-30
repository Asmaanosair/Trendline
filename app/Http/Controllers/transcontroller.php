<?php

namespace App\Http\Controllers;

use App\translation;
use Illuminate\Http\Request;

class transcontroller extends Controller
{
    function home(){
        $home=translation::find(1);
        return view('admin.translation.trans',['home'=>$home]);
    }

    function update(Request $request){


        $test=translation::find(1);
        $test->home=implode(',',$request->home);
        $test->help=implode(',',$request->help);
        $test->category=implode(',',$request->category);
        $test->product=implode(',',$request->product);
        $test->about=implode(',',$request->about);
        $test->testimonial=implode(',',$request->testimonial);
        $test->contact=implode(',',$request->contact);
        $test->itemnumber=implode(',',$request->itemnumber);
        $test->order=implode(',',$request->order);
        $test->submit=implode(',',$request->submit);
        $test->name=implode(',',$request->name);
        $test->phone=implode(',',$request->phone);
        $test->email=implode(',',$request->email);
        $test->message=implode(',',$request->message);
        $test->ordernow=implode(',',$request->ordernow);
        $test->service=implode(',',$request->service);
        $test->ourservice=implode(',',$request->ourservice);
        $test->description=implode(',',$request->description);
        
        $test->price=implode(',',$request->price);
        $test->pay=implode(',',$request->pay);
        $test->recom=implode(',',$request->recom);
       
        if($test->save()){


           return back();
        }

    }
}
