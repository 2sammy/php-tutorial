<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for($x = 0; $x <= 10; $x++){
  echo $x;
}



/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x= 1;
while($x <= 15) {
  echo 'Number ' . $x. '<br>';
  $x++;
  $x + 1;
}


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);




do...while loop will always execute the block of code once, even if the condition is false.
*/

$x = 1;
do {
  echo 'NUmber' . $x . '<br>';
  $x++;

}
while ($x <= 5);



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

foreach($posts as $posts) {
  echo $posts ;
}