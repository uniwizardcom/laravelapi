<?php
/**
 * Copyright ©Uniwizard All rights reserved.
 * See LICENSE_UNIWIZARD for license details.
 * @author: Uniwizard Wojciech Niewiadomski
 */
declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['validator']->extend('numericarray', function ($attribute, $value, $parameters)
        {
            foreach ($value as $v) {
                if (!is_int($v)) {
                    return false;
                }
            }
            return true;
        });
    }

    public function register()
    {
        //
    }
}
