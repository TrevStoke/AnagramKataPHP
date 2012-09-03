<?php
/**
 * Created by JetBrains PhpStorm.
 * User: trevoradams
 * Date: 03/09/2012
 * Time: 16:52
 * To change this template use File | Settings | File Templates.
 */

function sort_characters_in_string_ascending($strToSort)
{
    $characters = str_split($strToSort);
    sort($characters);
    return implode($characters);
}

function isPermutation($subject, $candidate){
    if(strlen($subject) != strlen($candidate)){
        return false;
    }
    $subjectSorted = sort_characters_in_string_ascending($subject);
    $candidateSorted = sort_characters_in_string_ascending($candidate);

    if(strcmp($subjectSorted, $candidateSorted) == 0){
        return true;
    }

    return false;
}

?>