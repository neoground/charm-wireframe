<?php
/**
 * This file contains the Demo cron job
 */

namespace App\Jobs\Cron;

use Charm\Crown\Cronjob;

/**
 * Class Demo
 *
 * Demo cron job
 *
 * @package App\Jobs\Cron
 */
class Demo extends Cronjob
{
    /**
     * Cron job configuration
     */
    protected function configure(): void
    {
        $this->setName('Demo command')
            ->runWeekly();
    }

    /**
     * Run that job.
     *
     * @return bool
     */
    public function run(): bool
    {
        return true;
    }
}