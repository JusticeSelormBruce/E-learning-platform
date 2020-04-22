<?php

namespace App\Providers;

use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
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

        view()->composer('*', function ($view) {
            $categories = DB::table('categories')->get()->all();
            $forms = DB::table('forms')->get()->all();
            $roles = DB::table('roles')->get()->all();
            $students_population = DB::table('users')->where('role_id', 1)->count();
            $admins_population = DB::table('users')->where('role_id', 2)->count();
            $classrooms = DB::table('categories')->count();
            $students = DB::table('users')->where('role_id', 1)->get()->all();
            $admins = DB::table('users')->where('role_id', 2)->get()->all();
            $AllUsers = DB::table('users')->get()->all();
            $freeTutorials = DB::table('posts')->where('state',1)->get()->all();

            if (!$freeTutorials == null) {

                foreach ($freeTutorials as $list) {

                    $data[] = DB::table('tutorials')->where('id', $list->tutorial_id)->get()->first();

                }
                $view->with(compact('categories', 'forms', 'roles', 'data',
                    'students_population', 'admins_population', 'classrooms', 'students', 'admins', 'AllUsers'));
            } else {
                $data = null;

                $view->with(compact('categories', 'forms', 'roles', 'data',
                    'students_population', 'admins_population', 'classrooms', 'students', 'admins', 'AllUsers'));
            }

        });


    }
}
