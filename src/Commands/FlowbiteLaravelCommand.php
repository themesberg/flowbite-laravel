<?php

namespace Flowbite\FlowbiteLaravel\Commands;

use Illuminate\Console\Command;

class FlowbiteLaravelCommand extends Command
{
    public $signature = 'flowbite-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
