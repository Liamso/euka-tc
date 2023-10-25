<?php

namespace App\Anagram\Providers;

use Illuminate\Support\ServiceProvider;
use App\Anagram\Console\Commands\PrintAnagramsCommand;

class AnagramServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            PrintAnagramsCommand::class,
        ]);
    }
}
