<?php

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Console\Scheduling\ScheduleTestCommand;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => \App\Http\Middleware\CheckRole::class,
        ]);
        
        $middleware->validateCsrfTokens(
            except :['stripe/*','login']
        );
    })
    
    ->withSchedule(function (Schedule $schedule){
        $schedule->call(function(){
            echo "I Am Back <br>";
        })->everyMinute();
    })

    ->withSchedule(function(Schedule $schedule) {
     $schedule->command('app:table')->everyFiveSeconds();
    } )
    
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
