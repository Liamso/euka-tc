<?php

namespace App\Anagram\Console\Commands;

use App\Anagram\Services\AnagramService;
use Illuminate\Console\Command;

class PrintAnagramsCommand extends Command
{
    protected $signature = 'anagrams:print {word} {file}';

    protected $description = 'Prints anagrams given a word and file path of a comma delimited list of words.';

    public function handle(AnagramService $anagramService): void
    {
        $output = $anagramService->findAnagrams(
            $this->argument('word'),
            explode(',', file_get_contents($this->argument('file')))
        );

        $this->line(sprintf('Found %d anagrams.', count($output)));
        $this->line(implode(', ', $output));
    }
}
