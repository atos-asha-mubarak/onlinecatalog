<?php

include("database_connect.php");

mysql_connect($servername, $username, $password);
mysql_select_db($dbname);

 if(isset($_POST['author'])){
     // $newtitle =  $_POST['change'];
         $Author_change = $_POST['author'];
         $isbn =$_POST['ISBN'];
      $sql = "UPDATE booksearch SET AUTHOR = '$Author_change' WHERE ISBN=$isbn";
      
     //echo $sql;
       // $res = mysql_query($sql) or die ("could not update".mysql_error());
    }

?>
<form action ="edit.php" method ="POST">
<input type="hidden" name="ISBN" value="<?php $isbn=$_GET["ISBN"]; echo $isbn?>">

AUTHOR: <input type ="text" name ="author" ><br /> 
  <input type="submit" value="Update">
  </form>

?>