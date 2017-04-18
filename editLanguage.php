<?php

include("database_connect.php");

   if(isset($_POST['newLanguage'])){
   
          $change9 = $_POST['newLanguage'];
         $BookId=$_POST['BOOKID'];
      $sql = "UPDATE booksearch SET LANGUAGE = '$change9' WHERE BOOKID=$BookId" ;
      
      echo $sql;
        $res = mysql_query($sql) or die ("could not update".mysql_error());
    }


?>

<form action ="editLanguage.php" method ="POST">

<input type="hidden" name="BOOKID" value="<?php $BookId=$_GET["BOOKID"]; echo $BookId?>">
LANGUAGE <input type = "text" name = "newLanguage"><br />
  
<input type="submit" value="Update">
</form>