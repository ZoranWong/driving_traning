<?php

namespace App\Providers;

use App\Utils\RegularExp;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
        if($this->app->environment() !== "production" && !$this->app->runningInConsole()){
            DB::listen(function (QueryExecuted $event){
                Log::debug($event->time.':'.$event->sql, $event->bindings);
            });
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->register(RepositoryServiceProvider::class);
        if ($this->app->environment() !== 'production') {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }
}
