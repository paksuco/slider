<?php

/**
 * Routes for the package would go here
 */

use Illuminate\Support\Facades\Route;

Route::group([
    'layout' => config("slider.template_to_extend", "layouts.app"),
    'prefix' => config("slider.admin_route_prefix", ""),
    'as' => 'paksuco.',
], function () {
    Route::livewire('/permissions', "slider::admin")
        ->name("slider.admin")
        ->middleware(config("slider.middleware", []));
});
