<?php

namespace App\Anagram\Tests\Console\Commands;

use Tests\TestCase;

class PrintAnagramsCommandTest extends TestCase
{
    /** @test */
    public function can_find_anagrams_test(): void
    {
        $this->artisan('anagrams:print test dictionary')
            ->expectsOutput('Found 2 anagrams.')
            ->expectsOutput('stet, tets');
    }
}
