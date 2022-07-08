<?php 
    $servername = "Localhost";
    $username = "root";
    $password = "root";
    $database = "library";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn→connect_error) {
        //die("Connection failed: " . $conn→connect_error);
        die("<script>alert('Connection Failed.')</script>");
      }
      //echo "<script>alert('Connected successfully.')</script>";
    
?>