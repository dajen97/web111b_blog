<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    View()->share('global', '我的全域變數');
    View()->composer(['views.layouts'], function ($view) {
      $view->with('multi', '多視圖變數');
    });
  }
}