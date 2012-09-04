<?php
/**
 * Created by JetBrains PhpStorm.
 * User: trevoradams
 * Date: 03/09/2012
 * Time: 16:50
 * To change this template use File | Settings | File Templates.
 */

error_reporting(E_ALL);
require_once "anagram_functions.php";
$nl = "\n";
$words = array();

$input = "silent";
try {
    $words = file('wordlist.txt', FILE_SKIP_EMPTY_LINES);
}
catch (Exception $e){
    print $e->getMessage();
}

$anagrams = array();

foreach($words as $line_no => $word){
    $candidate = trim($word);
    if(isPermutation($input, $candidate))
    {
        $anagrams[] = $candidate;
    }
}

print $input;

foreach($anagrams as $find){
    if(strcmp($find, $input)!=0)
        print " " . $find;
}