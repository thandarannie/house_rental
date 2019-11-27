<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        
        $schedule->call(function () 
        {

            $now = now();
            $tos = DB::table('rents')->pluck('to');

            foreach($tos as $to) 
            {
               if($to==$now)
               {

                $rent=DB::table('rents')->where('to',$to)->get();
                DB::table('houses')->where('house_id',$rent->house_id)->update(['status' => 0]);
                }
            }

        })->everyMinute()->command('Hello'); /*end schedule*/

      
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
