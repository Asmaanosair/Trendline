<?php

namespace App\Providers;

use App\branch;
use App\contact;
use App\phone;
use App\aniversary;

use App\translation;


use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
      Schema::defaultStringLength(191);
          $test=translation::find(1);
          
                    $transl=translation::find(1);
  
        $branch=branch::all();
        $con=contact::find(1);
        $aniversary=aniversary::find(1);
        $phone=phone::all();

        return view()->share(['branch'=>$branch,'con'=>$con,'phone'=>$phone,'aniversary'=>$aniversary,'test'=>$test,'transl'=>$transl]);
      
    
}
}
