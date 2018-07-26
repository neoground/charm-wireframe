<?php
/**
 * This file contains the UpdateCurrencies cron job
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
    protected function configure()
    {
        $this->setName('Demo command')
            ->runWeekly();
    }

    /**
     * Run that job.
     *
     * @return bool
     */
    public function run()
    {
        return true;
    }
}