<?php

 
 include("database_connect.php");

   if(isset($_POST['newYear'])){
   
          $change3 = $_POST['newYear'];
         $BookId =$_POST['BOOKID'];
      $sql = "UPDATE booksearch SET YEAR = '$change3' WHERE BOOKID=$BookId" ;
      
      echo $sql;
        $res = mysql_query($sql) or die ("could not update".mysql_error());
    }


?>
<br /><form action ="editYear.php" method ="POST">

<input type="hidden" name="BOOKID" value="<?php $BookId=$_GET["BOOKID"]; echo $BookId?>">
YEAR: <input type = "text" name = "newYear"><br />
  
<input type="submit" value="Update">
</form>