<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
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
        Route::resourceVerbs([
            'index' => 'listar',
            'create' => 'cadastrar',
            'store' => 'salvar',
            'show' => 'mostrar',
            'edit' => 'editar',
            'update' => 'atualizar',
            'destroy' => 'apagar'
        ]);
    }
}
