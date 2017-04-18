<?php
include("database_connect.php");

   if(isset($_POST['newPublisher'])){
   
          $change4 = $_POST['newPublisher'];
         $BookId =$_POST['BOOKID'];
      $sql = "UPDATE booksearch SET PUBLISHER = '$change4' WHERE BOOKID=$BookId" ;
      
      echo $sql;
        $res = mysql_query($sql) or die ("could not update".mysql_error());
    }


?>

<form action ="editPublisher.php" method ="POST">

<input type="hidden" name="BOOKID" value="<?php $BookId=$_GET["BOOKID"]; echo $BookId?>">
PUBLISHER: <input type = "text" name = "newPublisher"><br />
  
<input type="submit" value="Update">
</form>