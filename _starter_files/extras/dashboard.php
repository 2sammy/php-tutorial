<?php
session_start();

if(isset($_SESSION['username'])) {
    echo '<h1> Welcome' . $_SESSION['username'] . '</h1>';
}
else {
    echo "<h1> welcome guest </h1>";
    echo '<a href="/php-tutorial/_starter_files/13_sessions.php"> Home</a>';
    
}