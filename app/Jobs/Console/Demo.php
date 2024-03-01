<?php
/**
 * This file contains a console command.
 */

namespace App\Jobs\Console;

use Charm\Bob\Command;

/**
 * Class Demo
 *
 * Demo console command
 *
 * @package App\Jobs\Console
 */
class Demo extends Command
{

    /**
     * The configuration
     */
    protected function configure()
    {
        $this->setName("demo:run")
            ->setDescription("Run demo command");
    }

    /**
     * The execution
     *
     * @return bool
     */
    public function main(): bool
    {
        $this->io->text('Hello world!');
        return true;
    }
}