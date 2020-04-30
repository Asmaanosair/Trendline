<?php

namespace App\Http\Controllers;

use App\aniversary;
use Illuminate\Http\Request;

class annivcontroller extends Controller
{
    function index()
    {
        $product = aniversary::find(1);
        return view('admin.anniversary', ['product' => $product]);

    }

    function update(Request $request){

        $this->validate($request,
            [

                'des'=>'required',
                 'title'=>'required',



            ]);
        $test=aniversary::find(1);


        $test->des=$request->des;
         $test->title=$request->title;




        if($test->save()){

            return back();
        }

    }
}
