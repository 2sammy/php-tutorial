<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information 
  (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/
session_start();

if(isset($_POST['submit'])){
  $name= filter_input(INPUT_POST, 'username',
  FILTER_SANITIZE_SPECIAL_CHARS
);

$password = $_POST['password'];

if($username =='sam' && $password == 'password') {
  $_SESSION['username'] = $username;
  header('Location: /php-crash/extras/dashboard.php');
} else {
  echo 'Incorrect login';
}


}

//echo $_GET['name'];
//echo $_POST['age'];
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>"
method="$_POST">

  <div>
    <label form="username"> Name: </label>
    <input type="text" name="username">
  </div>


  <div>
    <label form="age"> Age: </label>
    <input type="text" name="age">
  </div>

<input type="submit" value="Submit" name="submit">

</form>
