<?php

/**
 * Generate associative array of associative arrays from associative arrays of arrays
 * e.g ['key' => ['key1' => [1,2], 'key2' => [3,4] to
 * ['key' => [['key1'=>1, 'key2'=> 3], ['key1'=>2, 'key2'=> 4]]
 * @param $array
 * @return void
 */

function assoc_from_array($array): array
{
    $outputArray = [];
    foreach ($array as $targetKey => $value1){
        $keysToCombine = array_keys($value1);
        $finishedIndexes = [];
        foreach ($array[$targetKey] as $key => $values) {
            foreach ($values as $index => $value) {
                if(in_array($index, $finishedIndexes, true)){
                    continue;
                }
                $subArray = [];
                $are_all_null = true;
                foreach ($keysToCombine as $combineKey) {
                    $subArray[$combineKey] = $array[$targetKey][$combineKey][$index]??null;
                    if($are_all_null && !is_null($subArray[$combineKey])){
                        $are_all_null = false;
                    }
                }
                if(!$are_all_null){
                    $outputArray[$targetKey][] = $subArray;
                }
                $finishedIndexes[] = $index;
            }
        }
    }
    return $outputArray;
}
