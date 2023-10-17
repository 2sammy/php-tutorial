<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
function registerUser($email) {
  echo   $email . ' register';
}
registerUser('sam');
// email is argument then sam is a parameter


function sum($n1, $n2) {
  return $n1 + $n2;
}

 //echo sum(4,5);
 $number = sum(4,5);
 //echo $number;

 function sumi($n1= 4, $n2= 5) {
  return $n1 + $n2;
 }
 $number = sumi();
 echo $number;

 $sub = function ($n1, $n2) {
  return $n1- $n2;
 };
 echo $sub(10, 5);
 // arrow function
 $multiply = fn($n2, $n3) => $n2 * $n3;
 $boo = fn ($s2, $s3) => $s2 + $s3;

