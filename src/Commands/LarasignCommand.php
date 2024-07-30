<?php

namespace Adenvt\Larasign\Commands;

use Illuminate\Console\Command;

class LarasignCommand extends Command
{
    public $signature = 'larasign';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
