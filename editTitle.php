<?php
 
     include("database_connect.php");

    if(isset($_POST['newtitle'])){
     // $newtitle =  $_POST['change'];
         $change = $_POST['newtitle'];
         $BookId =$_POST['BOOKID'];
      $sql = "UPDATE booksearch SET BOOKTITLE = '$change' WHERE BOOKID =$BookId" ;
      
      echo $sql;
        $res = mysql_query($sql) or die ("could not update".mysql_error());
    }
     
    
?>
<form action ="editTitle.php" method ="POST">
<input type="hidden" name="BOOKID" value="<?php $BookId=$_GET["BOOKID"]; echo $BookId?>">
TITLE: <input type ="text" name ="newtitle" ><br />  

  
<input type="submit" value="Update">
</form>