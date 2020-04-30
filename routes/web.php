<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*
  * *************************************************
  *                                                 *
  * ******************* Web Site *******************
  *                                                 *
  * *************************************************
  */
Route::get('/','sitecontroller@publish' );
Route::get('/{local}','sitecontroller@index' );
Route::get('/Service/{local}','sitecontroller@service' );
Route::get('/Category/{local}','sitecontroller@category' );
Route::get('/About/{local}','sitecontroller@about' );
Route::get('/Contact/{local}','sitecontroller@contact' );
Route::get('/Agent/{local}','sitecontroller@agent' );
Route::get('/Product/{id}/{local}','sitecontroller@product' );
Route::get('/Stock/{local}','sitecontroller@stock' );
Route::get('/pay/{local}','sitecontroller@pay' );
Route::get('/Anniversary/{local}','sitecontroller@anniversary' );
Route::get('/Offer/{local}','sitecontroller@offers' );

Route::get('/Faq/{local}','sitecontroller@faq' );
Route::post('/send','sitecontroller@send');
Route::post('/send_order','sitecontroller@send_order');
Route::get('/order/{name}({id})/{local}','sitecontroller@order');
Route::get('/Search','sitecontroller@search');

/*
  **************************************************
  *                                                 *
  *   ******************* End Web Site**************
  *                                                 *
  * *************************************************
  */
Route::group(["middleware"=>['auth']],function (){
    Route::get('/kt_admin/dashboard','admincontroller@index' );
/*
  * *************************************************
  *                                                 *
  * ******************* Contact *******************
  *                                                 *
  * *************************************************
  */
  Route::get('/kt_admin/change_pass','admincontroller@chang' );
Route::post('/kt_admin/up_pass/{id}','admincontroller@chang_pass' );

Route::get('/kt_admin/contact','contactcontroller@index' );
Route::post('/kt_admin/up_contact/{id}','contactcontroller@update' );
Route::post('/kt_admin/up_email/{id}','contactcontroller@email_update' );
Route::post('/kt_admin/up_phone/{id}','contactcontroller@phone_update' );
Route::post('/kt_admin/up_branch/{id}','contactcontroller@branch_update' );
Route::get('/kt_admin/del_email/{id}','contactcontroller@delete_mail' );
Route::get('/kt_admin/del_phone/{id}','contactcontroller@delete_phone' );
Route::get('/kt_admin/del_branch/{id}','contactcontroller@delete_branch' );
Route::post('/kt_admin/add_email','contactcontroller@add_email');
Route::post('/kt_admin/add_phone','contactcontroller@add_phone');
Route::post('/kt_admin/add_branch','contactcontroller@add_branch');

/*
  **************************************************
  *                                                 *
  *  ******************* End Contact **************
  *                                                 *
  * *************************************************
  */


/*
  * *************************************************
  *                                                 *
  * ******************* Category *******************
  *                                                 *
  * *************************************************
  */

Route::get('/kt_admin/category','categorycontroller@index' );
Route::post('/kt_admin/up_category/{id}','categorycontroller@update' );
Route::post('/kt_admin/add_category','categorycontroller@add' );
Route::get('/kt_admin/del_category/{id}','categorycontroller@delete' );
/*
  **************************************************
  *                                                 *
  *   ******************* End Category**************
  *                                                 *
  * *************************************************
  */
  
  
  /*
  * *************************************************
  *                                                 *
  * ******************* Counter *******************
  *                                                 *
  * *************************************************
  */

Route::get('/kt_admin/count','countcontroller@index' );
Route::post('/kt_admin/up_count/{id}','countcontroller@update' );
Route::post('/kt_admin/add_count','countcontroller@add' );
Route::get('/kt_admin/del_count/{id}','countcontroller@delete' );
/*
  **************************************************
  *                                                 *
  *   ******************* End Category**************
  *                                                 *
  * *************************************************
  */


        /*
 **************************************************
 *                                                 *
 *   ******************* Translation**************
 *                                                 *
 * *************************************************
 */
    Route::get('/kt_admin/trans','transcontroller@home' );
    Route::post('/kt_admin/trans','transcontroller@update');





    /*
      **************************************************
      *                                                 *
      *   ******************* End Translation **********
      *                                                 *
      * *************************************************
      */
/*
  * *************************************************
  *                                                 *
  * ******************* Product *******************
  *                                                 *
  * *************************************************
  */

Route::get('/kt_admin/product','productcontroller@index' );
Route::post('/kt_admin/up_product/{id}','productcontroller@update' );
Route::post('/kt_admin/add_product','productcontroller@add' );
Route::get('/kt_admin/del_product/{id}','productcontroller@delete' );

/*********************product_image******************************/

Route::get('/kt_admin/product/{id}','productcontroller@product_image' );
Route::post('/kt_admin/image/{id}','productcontroller@add_image' );
Route::post('/kt_admin/up_image/{id}','productcontroller@up_image' );
Route::get('/kt_admin/del_image/{id}','productcontroller@del_image' );

/********************* endproduct_image******************************/
/*
  **************************************************
  *                                                 *
  *   ******************* End Product**************
  *                                                 *
  * *************************************************
  */

/*
  * *************************************************
  *                                                 *
  * ******************* Slider *******************
  *                                                 *
  * *************************************************
  */
Route::get('/kt_admin/slider','slidercontroller@index' );
Route::get('/kt_admin/c_slider','slidercontroller@create' );
Route::get('/kt_admin/e_slider/{id}','slidercontroller@edit');
Route::post('/kt_admin/up_slider/{id}','slidercontroller@update');
Route::post('/kt_admin/add_slider','slidercontroller@add');
Route::get('/kt_admin/del_slider/{id}','slidercontroller@delete');
/*
  **************************************************
  *                                                 *
  *   ******************* End Slider**************
  *                                                 *
  * *************************************************
  */

/*
  * *************************************************
  *                                                 *
  * ******************* Testimonials *******************
  *                                                 *
  * *************************************************
  */
Route::get('/kt_admin/test','testimonialcontroller@index');
Route::post('/kt_admin/up_test/{id}','testimonialcontroller@update');
Route::get('/kt_admin/del_test/{id}','testimonialcontroller@delete');
Route::post('/kt_admin/add_test','testimonialcontroller@add');
/*
  * *************************************************
  *                                                 *
  * ******************* EndTestimonials***************
  *                                                 *
  * *************************************************
  */
  
  Route::get('/kt_admin/feat','featcontroller@index');
Route::post('/kt_admin/up_feat/{id}','featcontroller@update');
Route::get('/kt_admin/del_feat/{id}','featcontroller@delete');
Route::post('/kt_admin/add_feat','featcontroller@add');

/*
  * *************************************************
  *                                                 *
  * ******************* Service *******************
  *                                                 *
  * *************************************************
  */
Route::get('/kt_admin/service','servicecontroller@index');
Route::post('/kt_admin/up_service/{id}','servicecontroller@update');
Route::get('/kt_admin/del_service/{id}','servicecontroller@delete');
Route::post('/kt_admin/add_service','servicecontroller@add');
/*
  * *************************************************
  *                                                 *
  * ******************* End Service***************
  *                                                 *
  * *************************************************
  */
  
  
    Route::get('/kt_admin/offer','offercontroller@index');
    Route::get('/kt_admin/anniversary','annivcontroller@index');


    Route::post('/kt_admin/up_offer','offercontroller@update');
    Route::post('/kt_admin/up_anniversary','annivcontroller@update');

/*
  * *************************************************
  *                                                 *
  * *******************  Feature Service *******************
  *                                                 *
  * *************************************************
  */
Route::get('/kt_admin/f_service','f_servicecontroller@index');
Route::get('/kt_admin/c_f_service','f_servicecontroller@create');
Route::get('/kt_admin/e_f_service/{id}','f_servicecontroller@edit');
Route::post('/kt_admin/up_f_service/{id}','f_servicecontroller@update');
Route::get('/kt_admin/del_f_service/{id}','f_servicecontroller@delete');
Route::post('/kt_admin/add_f_service','f_servicecontroller@add');
/*
  * *************************************************
  *                                                 *
  * ******************* End  Feature Service***************
  *                                                 *
  * *************************************************
  */
/*
  * *************************************************
  *                                                 *
  * *******************  Offer Service *******************
  *                                                 *
  * *************************************************
  */
Route::get('/kt_admin/o_service','o_servicecontroller@index');
Route::post('/kt_admin/up_o_service/{id}','o_servicecontroller@update');
Route::get('/kt_admin/del_o_service/{id}','o_servicecontroller@delete');
Route::post('/kt_admin/add_o_service','o_servicecontroller@add');
/*
  * *************************************************
  *                                                 *
  * ******************* End Offer Service***************
  *                                                 *
  * *************************************************
  */

/*
  * *************************************************
  *                                                 *
  * *******************  Offer agent *******************
  *                                                 *
  * *************************************************
  */
// Route::get('/kt_admin/agent','agentcontroller@index');
// Route::get('/kt_admin/e_agent/{id}','agentcontroller@edit');
// Route::get('/kt_admin/c_agent','agentcontroller@create');
// Route::post('/kt_admin/up_agent/{id}','agentcontroller@update');
// Route::get('/kt_admin/del_agent/{id}','agentcontroller@delete');
// Route::post('/kt_admin/add_agent','agentcontroller@add');
/*
  * *************************************************
  *                                                 *
  * ******************* End Offer agent***************
  *                                                 *
  * *************************************************
  */
  
//   Route::get('/kt_admin/faq','faqcontroller@index');
// Route::get('/kt_admin/e_faq/{id}','faqcontroller@edit');
// Route::get('/kt_admin/c_faq','faqcontroller@create');
// Route::post('/kt_admin/up_faq/{id}','faqcontroller@update');
// Route::get('/kt_admin/del_faq/{id}','faqcontroller@delete');
// Route::post('/kt_admin/add_faq','faqcontroller@add');

/*
  * *************************************************
  *                                                 *
  * *******************  Offer How *******************
  *                                                 *
  * *************************************************
  */
// Route::get('/kt_admin/how','howcontroller@index');
// Route::post('/kt_admin/up_how/{id}','howcontroller@update');
// Route::get('/kt_admin/del_how/{id}','howcontroller@delete');
// Route::post('/kt_admin/add_how','howcontroller@add');
/*
  * *************************************************
  *                                                 *
  * ******************* End Offer How***************
  *                                                 *
  * *************************************************
  */

/*
  * *************************************************
  *                                                 *
  * *******************  stock *******************
  *                                                 *
  * *************************************************
  */
Route::get('/kt_admin/stock','stockcontroller@index');
Route::post('/kt_admin/up_stock/{id}','stockcontroller@update');
Route::get('/kt_admin/del_stock/{id}','stockcontroller@delete');
Route::post('/kt_admin/add_stock','stockcontroller@add');
/*
  * *************************************************
  *                                                 *
  * ******************* End stock***************
  *                                                 *
  * *************************************************
  */



/*
  * *************************************************
  *                                                 *
  * *******************  About *******************
  *                                                 *
  * *************************************************
  */
Route::get('/kt_admin/about','aboutcontroller@index');
Route::post('/kt_admin/up_about/{id}','aboutcontroller@update');
Route::post('/kt_admin/up_about_video','aboutcontroller@update_video');
// Route::get('/kt_admin/del_about/{id}','aboutcontroller@delete');
// Route::post('/kt_admin/add_about','aboutcontroller@add');
/*
  * *************************************************
  *                                                 *
  * ******************* End About***************
  *                                                 *
  * *************************************************
  */
  
  /*
  * *************************************************
  *                                                 *
  * *******************  Visitors *******************
  *                                                 *
  * *************************************************
  */
Route::get('/kt_admin/visit','visitcontroller@index');
Route::post('/kt_admin/up_visit/{id}','visitcontroller@update');

/*
  * *************************************************
  *                                                 *
  * ******************* End Visitors***************
  *                                                 *
  * *************************************************
  */
  
  

    /*
      * *************************************************
      *                                                 *
      * ******************* China Guide *******************
      *                                                 *
      * *************************************************
      */
    // Route::get('/kt_admin/guide','guidecontroller@index');
    // Route::post('/kt_admin/up_guide/{id}','guidecontroller@update');
    // Route::get('/kt_admin/del_guide/{id}','guidecontroller@delete');
    // Route::post('/kt_admin/add_guide','guidecontroller@add');
    /*
      * *************************************************
      *                                                 *
      * ******************* End China Guide***************
      *                                                 *
      * *************************************************
      */


    /*
   * *************************************************
   *                                                 *
   * *******************  Sub China Guide *******************
   *                                                 *
   * *************************************************
   */
    // Route::get('/kt_admin/sub_guide','sub_guidecontroller@index');
    // Route::post('/kt_admin/up_sub_guide/{id}','sub_guidecontroller@update');
    // Route::get('/kt_admin/del_sub_guide/{id}','sub_guidecontroller@delete');
    // Route::post('/kt_admin/add_sub_guide','sub_guidecontroller@add');
    //
    /*
      * *************************************************
      *                                                 *
      * ******************* End  Sub China Guide***************
      *                                                 *
      * *************************************************
      */


    /*
 * *************************************************
 *                                                 *
 * *******************  Sub  detail China Guide *******************
 *                                                 *
 * *************************************************
 */
//     Route::get('/kt_admin/detail','detailcontroller@index');
//     Route::get('/kt_admin/c_detail','detailcontroller@create' );
//      Route::post('/article_img','detailcontroller@image' );
//     Route::get('/article_img','detailcontroller@image' );
//     Route::post('/upload/article_img','detailcontroller@uploadimage' );
//   // Route::post('/article_img','detailcontroller@image' );
    Route::get('/kt_admin/e_detail/{id}','detailcontroller@edit' );
    Route::post('/kt_admin/up_detail/{id}','detailcontroller@update');
//     Route::get('/kt_admin/del_detail/{id}','detailcontroller@delete');
//     Route::post('/kt_admin/add_detail','detailcontroller@add');
    /*
      * *************************************************
      *                                                 *
      * ******************* End detail Sub China Guide***************
      *                                                 *
      * *************************************************
      */


    /*
   * *************************************************
   *                                                 *
   * ******************* China Market *******************
   *                                                 *
   * *************************************************
   */
    // Route::get('/kt_admin/market','marketcontroller@index');
    // Route::post('/kt_admin/up_market/{id}','marketcontroller@update');
    //  Route::post('/kt_admin/up_link','howcontroller@update_link');
    // Route::get('/kt_admin/del_market/{id}','marketcontroller@delete');
    // Route::post('/kt_admin/add_market','marketcontroller@add');







    // Route::get('/kt_admin/sub_market','sub_marketcontroller@index');
    // Route::get('/kt_admin/c_sub_market','sub_marketcontroller@create' );

    // Route::get('/kt_admin/e_sub_market/{id}','sub_marketcontroller@edit' );
    // Route::post('/kt_admin/up_sub_market/{id}','sub_marketcontroller@update');
    // Route::get('/kt_admin/del_sub_market/{id}','sub_marketcontroller@delete');
    // Route::post('/kt_admin/add_sub_market','sub_marketcontroller@add');
    /*
      * *************************************************
      *                                                 *
      * ******************* End China Market***************
      *                                                 *
      * *************************************************
      */


///*
//  * *************************************************
//  *                                                 *
//  * *******************  Site *******************
//  *                                                 *
//  * *************************************************
//  */
//Route::get('/About','sitecontroller@about');
//Route::get('/Home','sitecontroller@index');
//Route::get('/contact','sitecontroller@contact');
//Route::get('/About','sitecontroller@add');
///*
//  * *************************************************
//  *                                                 *
//  * ******************* End Site***************
//  *                                                 *
//  * *************************************************
    Route::get('/KT_admin/logout',function (){
        auth()->logout();
        return view('auth.login');
    });
});
//  */
       Route::get('/KT_admin/login', 'Auth\LoginController@showLoginForm')->name('login');
     Route::post('/KT_admin/login', 'Auth\LoginController@login');


//Route::get('/home', 'HomeController@index')->name('home');
