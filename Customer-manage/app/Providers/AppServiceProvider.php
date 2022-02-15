<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Views\Composers\MenuComposer;

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
        // $menus = [
        //     [
        //         'name' => 'customers.index',
        //         'text'  => 'Danh sách khách hàng'
        //     ],
        //     [
        //         'name' => 'customers.create',
        //         'text' => 'Thêm mới khách hàng'
        //     ]
        // ];
        // View::share('menus', $menus);

        /*
            View::composer(['customers.index', 'customers.show'],   //chỉ chia sẻ 2 view trong mảng
            MenuComposer::class
        );
        */
        View::composer(
            '*',//tất cả các view
            MenuComposer::class
        );
    }
}
