<?php

namespace App\Console;

use App\Console\Commands\CreateJobLists;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\CreateJobLists::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        // Buraya zamanlama görevlerini ekleyebilirsiniz.
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

