<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Carbon\Carbon;
// 追加↓
use Illuminate\Support\Facades\DB;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
     
     
protected function schedule(Schedule $schedule)
{
    $schedule->call(function () {
        // 11:45になったらJavaScriptのshowAlert()関数を呼び出す
        echo "<script>showAlert();</script>";
    })->dailyAt('11:30');
}
    // protected function schedule(Schedule $schedule)
    // {
    //     // $schedule->command('inspire')->hourly();
    //     // 11:30にトイレ誘導のアラートを出す
    //     $schedule->call(function () {
    //         // アラートを表示する処理を実行
    //         echo "Alert: トイレ誘導してください" . PHP_EOL;
    //     })->dailyAt('11:30');
   
    // }

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
