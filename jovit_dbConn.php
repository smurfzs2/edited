<!--db connection-->
<?php

   $servername = "localhost";
   $username = "root";
   $password = "arktechdb";
   $dbname = "ojtDatabase";

   $con = new mysqli($servername, $username, $password, $dbname);

    if(!$con)
    {
        die("connection failed" . mysqli_error());
    }else{
        //echo "connection connected";
    }

?>