<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\f_service;
use App\agent;
use App\product;
use App\o_service;
use App\how;
use App\visit;
use App\service;
use App\slider;
use App\testimonial;
use App\about;
use App\faq;
use App\feature;
use App\category;
use App\sub_market;
use App\market;
use App\offer;
use App\aniversary;
use App\counter;
use App\about_video;
use App\link;
use App\Mail\send_mail;
use App\Mail\order_mail;
use App;
use Mail;
use App\stock;
use App\guide_detail;
use App\translation;


class sitecontroller extends Controller
{
    function publish(){
        return redirect("/en");
    }
     function index($locale){
         App::setLocale($locale);
         $slider=slider::all();
          $visit=visit::find(1);
         $serve=service::all();
         $counter=counter::all();
           $cat=category::all();
         $link=link::find(1);
          $prod=product::where('recommended',1)->get();
         $videos=about_video::find(1);
         $how=how::all();
         $o_serve=o_service::find(1);
         $test=testimonial::all();
           $test2=translation::find(1);
         return view('site.index',['slider'=>$slider,'serve'=>$serve,'how'=>$how,'test'=>$test,'test2'=>$test2,'counter'=>$counter,'videos'=>$videos,'link'=>$link,'visit'=>$visit,'o_serve'=>$o_serve,'cat'=>$cat,'prod'=>$prod]);
     }


    function anniversary($locale){
              App::setLocale($locale);
        $data=aniversary::find(1);
        
        return view('site.anniversary',["data"=>$data]);
    }
    
     function offers($locale){
               App::setLocale($locale);
          $data=offer::find(1);
        return view('site.Offers',["data"=>$data]);
    }
    function service($locale){
              App::setLocale($locale);
        $serve=service::all();
        $o_serve=o_service::find(1);
        $f_serve=f_service::all();
        return view('site.service',['serve'=>$serve,'o_serve'=>$o_serve,'f_serve'=>$f_serve]);
    }
   function agent($locale){
             App::setLocale($locale);
         $agent=agent::all();
        return view('site.agent',['agent'=>$agent]);
    }
     function category($locale){
               App::setLocale($locale);
         $cat=category::all();
        return view('site.category',['cat'=>$cat]);
    }
    function stock($locale){
              App::setLocale($locale);
         //$prod=product::all();
         $prod=stock::all();
        return view('site.stock',['prod'=>$prod]);
    }
    
     function faq($locale){
               App::setLocale($locale);
         $faq=faq::all();
        return view('site.faq',['faq'=>$faq]);
    }
    
     function product($id,$locale){
               App::setLocale($locale);
         $prod=product::where('category_id',$id)->get();
        return view('site.products',['prod'=>$prod]);
    }
     function about($locale){
               App::setLocale($locale);
          $o_serve=o_service::find(1);
         $visit=visit::find(1);
         $about=about::find(1);
        $serve=service::all();
         $feat=feature::all();
        return view('site.about',['about'=>$about,'serve'=>$serve,'visit'=>$visit,'feat'=>$feat,'o_serve'=>$o_serve]);
    }
    function contact($locale){
              App::setLocale($locale);
        return view('site.contact');
    }
    
      function pay($locale){
           App::setLocale($locale);
        return view('site.pay');
    }

    function market($id,$locale){
              App::setLocale($locale);
         $market=sub_market::find($id);
        $all=sub_market::all();
        return view('site.market',['market'=>$market,'all'=>$all]);
    }
    
       function guide($id,$locale){
                 App::setLocale($locale);
         $market=guide_detail::find($id);
        $all=guide_detail::all();
        return view('site.guide',['market'=>$market,'all'=>$all]);
    }
    
        
       function search(Request $request){
     
        $this->validate($request,
            [
               
                'city' => 'required',
            ]);

        if ($request->city == null) {

            return view('site.search');
        } else {
            $q = $request->city;
           $search = guide_detail::where('name', 'LIKE', '%' . $q . '%')->get();
          $search2 = sub_market::where('name', 'LIKE', '%' . $q . '%')->get();
        }
        if (count($search) > 0) {

            return view('site.search',['search'=>$search,'search2'=>$search2]);
        } else {

            return view('site.search');


        } 
       
        return view('site.search');
    }
    
     function order($name,$id,$locale){
               App::setLocale($locale);
               $section=product::find($id);
     
        return view('site.order',['name'=>$name,'section'=>$section]);
    }
     function send(Request $request){

         
    
             
               Mail::send(new send_mail());
         
              session()->flash("success","Your message has been sent  we will contact you shortly");


        return back();

    }
    
     function send_order(Request $request){

         
    
             
               Mail::send(new order_mail());
         
              session()->flash("success","Your order has been sent  we will contact you shortly");


        return back();

    }

}
