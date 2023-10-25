<?php

namespace App\Anagram\Tests\Services;

use App\Anagram\Services\AnagramService;
use Tests\TestCase;

class AnagramServiceTest extends TestCase
{
    /** @test */
    public function can_find_anagrams_test(): void
    {
        $results = resolve(AnagramService::class)->findAnagrams(
            'test',
            ['stet', 'tset', 'foo']
        );

        $this->assertCount(2, $results);
    }
}
