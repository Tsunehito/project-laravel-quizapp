<?php

namespace App\Providers;

use App\Quiz;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $quizzes = (new Quiz)->allQuiz();
        View::share('quizzes', $quizzes);
    }
}
