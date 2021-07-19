<?php

namespace App\Providers;

use App\Repositories\GoodRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        view()->composer(
            'welcome', function () {
                $repo =  new GoodRepository();
                $array = $repo->getGoodsFromUrl();
                $repo->saveGoods($array);
            }
        );
    }

    public function register()
    {
        //
    }
}
