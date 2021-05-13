<?php
    $host='host';
    $username='username';
    $password='password';
    $dbname = "dbname";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
            die('Could not Connect to SQL Server');
            //die('Could not Connect MySql Server:' .mysql_error());
        }
?>