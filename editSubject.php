<?php

include("database_connect.php");


   if(isset($_POST['newSubject'])){
   
          $change7 = $_POST['newSubject'];
         $BookId =$_POST['BOOKID'];
      $sql = "UPDATE booksearch SET SUBJECT = '$change7' WHERE BOOKID=$BookId" ;
      
      echo $sql;
        $res = mysql_query($sql) or die ("could not update".mysql_error());
    }


?>

<form action ="editSubject.php" method ="POST">

<input type="hidden" name="BOOKID" value="<?php $BookId=$_GET["BOOKID"]; echo $BookId?>">
SUBJECT: <input type = "text" name = "newSubject"><br />
  
<input type="submit" value="Update">
</form>