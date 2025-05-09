<?php

namespace Totocsa\IceIcons;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class IceIconsServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Ha van konfigurációs fájl, azt itt töltheted be
        //$this->mergeConfigFrom(__DIR__.'/../config/destroy-confirm-modal.php', 'destroy-confirm-modal');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/public' => public_path(),
        ], 'ice-icons');
    }
}
