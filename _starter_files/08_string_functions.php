<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/
$string2 = '<script>alert(1)</script>';
echo htmlspecialchars($string2);

printf('%s likes to %s', 'Brad', 'code');
printf('1+1 =%d', 1+1);