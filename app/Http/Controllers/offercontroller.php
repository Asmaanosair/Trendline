<?php

namespace App\Http\Controllers;

use App\offer;
use Illuminate\Http\Request;

class offercontroller extends Controller
{
    function index()
    {
        $product = offer::find(1);
        return view('admin.offer', ['product' => $product]);

    }

        function update(Request $request){

        $this->validate($request,
            [

                'des'=>'required',



            ]);
        $test=offer::find(1);


        $test->des=$request->des;




        if($test->save()){

            return back();
        }

    }
}
