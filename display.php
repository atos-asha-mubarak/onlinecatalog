<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_catalog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $sql= "SELECT * FROM booksearch";
    $recode = mysql_query($sql);

?>
<html>
<head>
<title> BOOK DETAILS </title>
</head>
<body>

<table width="600" border= "1" cellpaddin= "1" cellspacing="1">
  <tr>
  <th>TITLE</th>
    <th>AUTHOR</th>
      <th>YEAR</th>
        <th>PUBLISHER</th>
          <th>DATE/th>
            <th>ISBN</th>
              <th>LANGUAGE</th>
                <th>SUBJECT</th>
  <tr>
 <?php
   while($online_catalog = mysql_fetch_assoc($recode))  {
  {
     echo "<tr>";
     echo "<tr>".$online_catalog['TITLE']."</td>";
       echo "<tr>".$online_catalog['AUTHOR']."</td>";
          echo "<tr>".$online_catalog['YEAR']."</td>";
             echo "<tr>".$online_catalog['PUBLISHER']."</td>";
                echo "<tr>".$online_catalog['DATE']."</td>";
                   echo "<tr>".$online_catalog['ISBN']."</td>";
                      echo "<tr>".$online_catalog['LANGUAGE']."</td>";
                         echo "<tr>".$online_catalog['SUBJECT']."</td>";
                            echo  "</tr>";
  
  }
  
 ?> 
  
</body
</html>