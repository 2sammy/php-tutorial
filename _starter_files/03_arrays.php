<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/
//simple array

$numbers = [1,44,55,22];
$fruits = array('apple', 'orange', 'pear') ;

//sum = [1,2,3,4]
//names = array('sam', 'rish')

print_r($numbers);

//associate array
$color = [
  1=> 'green',
  2=> 'white',
  3=> 'black'
];

echo $color[3];

$person = [
  'first_name' => 'sam',
  'last_name' => 'mano',
  'email' => 'samuel@gmail'
];
 echo $person['first_name'];