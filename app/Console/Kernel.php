<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        // Commands\Inspire::class,
    ];

    /**
<<<<<<< HEAD
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
 protected function schedule(Schedule $schedule){
        // $schedule->command('inspire')
        //          ->hourly();
//        $schedule->command('emails:send --force')
//                ->everyFiveMinutes()
//                ->withoutOverlapping()//if the last hasn't stopped, new task won't begin
//                ->emailOutputTo('kovalchuk.oksana2@gmail.com');//only for command - not supported for method "call"
    }
}
