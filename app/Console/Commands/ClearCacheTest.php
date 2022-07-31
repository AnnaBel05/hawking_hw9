<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class ClearCacheTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cachetest:cleartest {key}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear cache';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if(Cache::has('key'))
        {
            $result = Cache::pull('key');
            if ($result)
            {
                return $this->info('Cache cleared');
            }
            else
            {
                return $this->error('Error');
            }
        }
        else
        {
            return $this->error('Key does not exist');
        }
    }
}
