<?php
 
     include ("index.html");
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

//insert recode into database 
 $bookname = $_POST['booktitle'];
 $author  = $_POST['authorname'];
 $bookyear = $_POST['bookyear'];
 $publisher = $_POST['bookpublisher'];
 $date = $_POST['publishdate'];
 $isbn = $_POST['isbnNum'];
 $language = $_POST['booklanguage'];
 $subject = $_POST['booksubjects'];
 
  
$sql = "INSERT INTO booksearch (BOOKTITLE, AUTHOR,YEAR,PUBLISHER,PUBLISHER_DATE,ISBN,LANGUAGE,SUBJECT)
VALUES ('$bookname','$author','$bookyear','$publisher','$date','$isbn','$language','$subject')";

if ($conn->query($sql) === TRUE) {
    echo ("NEW RECORD SUCESSFULLY ADDED");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

