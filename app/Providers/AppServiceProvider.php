<?php

namespace App\Providers;

use App\Utils\RegularExp;
use \Request;
use Illuminate\Support\ServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Validation\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::extend('mobile', function (string $attribute, $value, array $parameters, Validator $validator) {
            if(preg_match(RegularExp::MOBILE_REG_EXP, $value)){
                return true;
            }else{
                return false;
            }
        });

        \Validator::extend('telephone', function (string $attribute, $value, array $parameters, Validator $validator) {
            if(preg_match(RegularExp::TELEPHONE_REG_EXP, $value)){
                return true;
            }else{
                return false;
            }
        });
        //
        \Validator::extend('required_if_no', function (string $attribute, $value, array $parameters, Validator $validator){
            $key = is_array($parameters) ? $parameters[0] : $parameters;
            $input = Request::input($key, null);
            if(!$input){
                if($value){
                    return true;
                }else{
                    return false;
                }
            }
            return true;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        if ($this->app->environment() !== 'production') {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }
}
