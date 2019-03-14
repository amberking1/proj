

<?php
      define('_HOST_NAME','localhost');
      define('_DATABASE_NAME','db_healthcare');
      define('_DATABASE_USER_NAME','root');
      define('_DATABASE_PASSWORD','');

      $MySQLiconn = new MySQLi(_HOST_NAME,_DATABASE_USER_NAME,_DATABASE_PASSWORD,_DATABASE_NAME);
  
      if($MySQLiconn->connect_errno)
      {
        die("ERROR : -> ".$MySQLiconn->connect_error);
      }
 ?>



<!-- mysqli -->

<?php
$con = mysqli_connect("localhost","root","","db_healthcare");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  ?>