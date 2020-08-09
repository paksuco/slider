<?php

/**
 * Routes for the package would go here
 */

use Illuminate\Support\Facades\Route;

Route::group([
    'layout' => config("paksuco-slider.template_to_extend", "layouts.app"),
    'prefix' => config("paksuco-slider.admin_route_prefix", ""),
    'as' => 'paksuco.',
], function () {
    Route::livewire('/slider', "paksuco-slider::admin")
        ->name("slider.admin")
        ->middleware(config("paksuco-slider.middleware", []));
});
