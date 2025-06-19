<?php

namespace Blakroku\LaravelUiStructure\Commands;

use Illuminate\Console\Command;

class LaravelUiStructureCommand extends Command
{
    public $signature = 'laravel-ui-structure';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
