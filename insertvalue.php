


<?php
if(isset($_POST['submit'])){
  include ('dbconnect.php');
  $booktitle = $_POST['title'];
  $publisher = $_Post['author'];
  $sqlinsert = "INSERT INTO booksearch(BOOKTITLE,AUTHOR) VALUES('title','author')";
   
}



?>