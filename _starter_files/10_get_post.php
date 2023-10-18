a<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if(isset($_POST['submit'])){
  echo $_GET['name'];
echo $_POST['age'];

}
//echo $_GET['name'];
//echo $_POST['age'];
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?> ?name= john &
age= 30">CLICK</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>"
method="$_POST">

  <div>
    <label form="name"> Name: </label>
    <input type="text" name="name">
  </div>


  <div>
    <label form="age"> Age: </label>
    <input type="text" name="age">
  </div>

<input type="submit" value="Submit" name="submit">

</form>
