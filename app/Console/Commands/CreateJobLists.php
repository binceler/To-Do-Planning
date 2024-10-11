<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CreateJobLists extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todo:create-job-lists';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->confirm('Do you confirm that the job listings will be saved?', true)) {

            $this->line('Work list registration process has started.');

            foreach (config('job_lists') as $providerName) {
                $fullPath = file_exists(dirname(__DIR__, 2) . '/Http/JobList/' . $providerName . '.php');
                if ($fullPath) {
                    $className = '\\App\Http\\JobList\\' . $providerName;

                    $this->info($providerName . ' named job list started to be added.');

                    $getList = (new $className)->getList();
                    if ($getList) {
                        $this->info($providerName . ' The process of adding a work list has been completed.');
                    } else {
                        $this->info($providerName . ' There was an error in the process of adding a work list named.');
                    }
                }

            }

            Cache::flush();
            $this->info('All cache deleted.');

            $this->line('Work lists registration process is completed.');
        }
    }
}
