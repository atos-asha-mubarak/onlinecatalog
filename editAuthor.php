<?php

 
 include("database_connect.php");

   if(isset($_POST['newauthor'])){
     // $newtitle =  $_POST['change'];
         $change2 = $_POST['newauthor'];
         $BookId =$_POST['BOOKID'];
      $sql = "UPDATE booksearch SET AUTHOR = '$change2' WHERE BOOKID=$BookId" ;
      
      echo $sql;
        $res = mysql_query($sql) or die ("could not update".mysql_error());
    }


?>
<br /><form action ="editAuthor.php" method ="POST">

<input type="hidden" name="BOOKID" value="<?php $BookId=$_GET["BOOKID"]; echo $BookId?>">
AUTHOR: <input type = "text" name = "newauthor"><br />
  
<input type="submit" value="Update">
</form>