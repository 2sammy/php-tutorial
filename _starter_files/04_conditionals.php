<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */
$age = 29;
 if($age >= 20) {
   echo'you are older to drink';
 }

 $t = 3;
 if($t < 12) {
  echo 'Good morning';
 }
 elseif($t <17) {
  echo 'good afternoon';
 }

 else {
  echo 'good evening';
 }

 $posts = [''];
 if(!empty($posts) ) {
  echo $posts[0];
 } else {
  echo "no posts";
 }

 // ternary
 echo !empty($posts) ? $posts[0] : 'no posts';

 // switches
 $favcolor = 'red';
 switch($favcolor) {
  case 'red';
    echo 'my fav';
    break;
    case 'blue';
    echo 'my fav is blue';
    break;
    case 'black';
    echo 'fav is black';
    break;
    default:
    echo 'you dont have fav';
 }