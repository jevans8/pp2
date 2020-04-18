<?php

function printArr($array)
{
    foreach($array as $item)
    {
    echo "$item<br>";
    }
}

function largest($array)
{
    $largest = $array[0];
    for($i = 0; $i < sizeof($array); $i++)
    {
        if($array[$i] > $largest){
            $largest = $array[$i];
        }
    }
    return $largest;
}

function removeDups($array)
{
    $newArray = array();
    foreach($array as $item)
    {
        if(!in_array($item, $newArray)){
            array_push($newArray, $item);
        }
    }
    return $newArray;
}

function distribution($oldArray)
{
    sort($oldArray);
    $newArray = removeDups($oldArray);
    $assocArray = array();

    foreach($newArray as $item)
    {
        $count = 0;
        for($i = 0; $i < sizeof($oldArray); $i++)
        {
            if($item == $oldArray[$i]){
                $count++;
            }
        }
        //add to assoc array
        $assocArray += [ "$item" => "$count" ];
    }
    return $assocArray;
}