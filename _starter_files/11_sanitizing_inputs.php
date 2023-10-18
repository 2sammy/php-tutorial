<?php
/* --- Sanitizing Inputs -- */

/*
  Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/
?>
a<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if(isset($_POST['submit'])){
  $name= filter_input(INPUT_POST, 'name',
  FILTER_SANITIZE_SPECIAL_CHARS
);
}
if(isset($_POST['submit'])){
  $age = filter_input(INPUT_POST, 'age',
  FILTER_SANITIZE_SPECIAL_CHARS
);
echo $_POST['age'];

}
//echo $_GET['name'];
//echo $_POST['age'];
?>


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
