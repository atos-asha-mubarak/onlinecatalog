<?php

include("database_connect.php");

   if(isset($_POST['newISBN'])){
   
          $change5 = $_POST['newISBN'];
         $BookId =$_POST['BOOKID'];
      $sql = "UPDATE booksearch SET ISBN = '$change5' WHERE BOOKID=$BookId" ;
      
      echo $sql;
        $res = mysql_query($sql) or die ("could not update".mysql_error());
    }


?>

<form action ="editISBN.php" method ="POST">

<input type="hidden" name="BOOKID" value="<?php $BookId=$_GET["BOOKID"]; echo $BookId?>">
ISBN: <input type = "text" name = "newISBN"><br />
  
<input type="submit" value="Update">
</form>