# Anagram Module

This module is solely responsible for providing a command to find anagrams of a given dictionary (found inside this project's directory) and providing a service to allow consumption of the module elsewhere.

## anagrams:print

To find anagrams on the CLI, use `php artisan anagrams:print {word} {file}` - the file being the directory relative to the project that you wish to consume, and word being the word to find anagrams against. They will be printed into the CLI.

## Anagram Service

To allow for consumption in any use case, you may use the anagram service which expects an array of words and a matching word.

If a use case aristes that the dictionary of words was never going to change on a per-input basis, we may want to implement some pre-computation to keep access of words in linear time; by using storing an array with keys using a hash of our `sortedWord` in `AnagramService@ln16`, and the matching words as a value in said array.
