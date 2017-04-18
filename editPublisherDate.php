<?php

include("database_connect.php");


   if(isset($_POST['newPublisher_Date'])){
   
          $change8 = $_POST['newPublisher_Date'];
         $BookId =$_POST['BOOKID'];
      $sql = "UPDATE booksearch SET PUBLISHER_DATE = '$change8' WHERE BOOKID=$BookId" ;
      
      echo $sql;
        $res = mysql_query($sql) or die ("could not update".mysql_error());
    }


?>

<form action ="editPublisherDate.php" method ="POST">

<input type="hidden" name=" BOOKID" value="<?php $BookId=$_GET["BOOKID"]; echo $BookId?>">
PUBLISHER DATE: <input type = "text" name = "newPublisher_Date"><br />
  
<input type="submit" value="Update">
</form>