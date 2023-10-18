<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/
$fruits = ['apple','mango','banana' ];
//echo count($fruits);

 //search array
var_dump((in_array('apple',$fruits)));
//add to array
$fruits [] = 'grape';
print_r($fruits);
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'quava');

//remove in array
array_pop($fruits);
array_shift($fruits);

// split into 2 chuncks
$chuncked_array = array_chunk($fruits, 2);
print_r($chuncked_array);

// merging the two arrays
$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr = array_merge($arr1. $arr2);

print_r($arr3);
$arr4 = [...$arr1, ...$arr2];

print_r($arr4);

$numbers = range(1, 20);
print_r($numbers);
$newNumbers = array_map(function($numbers) {
  return "Number $numbers";
}, $numbers);

print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn($numbers) => 
  $numbers <= 10);

  print_r($lessThan10);

  

