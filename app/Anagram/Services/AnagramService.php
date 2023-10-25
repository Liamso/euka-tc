<?php

namespace App\Anagram\Services;

class AnagramService
{
    /**
     * Finds anagrams given a word and an array of strings
     *
     * @param string $word
     * @param string[] $dictionary
     * @return array
     */
    public function findAnagrams(string $word, array $dictionary): array
    {
        $sortedWord = $this->sortWord($word);

        foreach ($dictionary as $dictionaryWord) {
            // Make cheaper by not comparing invalid words
            if (strlen($dictionaryWord) !== strlen($sortedWord)) {
                continue;
            }

            // Check for anagram; ensure we don't add our original word.
            if ($this->sortWord($dictionaryWord) === $sortedWord
                && $word !== $dictionaryWord
            ) {
                $results[] = $dictionaryWord;
            }
        }

        return $results;
    }

    /**
     * Sorts a word into alphabetic order.
     *
     * @param string $word
     * @return string
     */
    private function sortWord(string $word): string
    {
        $sortedWord = str_split($word);
        sort($sortedWord);
        return implode('', $sortedWord);
    }
}
