<?php


// search for a book 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_catalog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

     

$search = $_POST['search'];
            
$resultSet = $conn->query("SELECT * FROM booksearch WHERE BOOKTITLE ='$search'"); 
                       
if($resultSet->num_rows > 0){
      
while($rows = $resultSet->fetch_assoc()){
$title =$rows['BOOKTITLE'];
$author =$rows['AUTHOR'];
$year =$rows['YEAR'];
$publisher =$rows['PUBLISHER'];
$publisher_date =$rows['PUBLISHER_DATE'];
$ISBN =$rows['ISBN'];
$language =$rows['LANGUAGE'];
$subject =$rows['SUBJECT'];
$BOOKID = $rows['BOOKID'] ;



echo "TITLE: $title <a href='editTitle.php ?BOOKID=$rows[BOOKID]'? edit = $rows[BOOKTITLE]>edit</a><br />
 Äuthor: $author <a href='editAuthor.php ? BOOKID=$rows[BOOKID]'? edit = $rows[AUTHOR]>edit</a> <br /> 
 YEAR:$year <a href='editYear.php  ?BOOKID=$rows[BOOKID]'? edit = $rows[YEAR]>edit</a> <br /> 
 PUBLISHER:$publisher <a href='editPublisher.php ?BOOKID=$rows[BOOKID]'? edit = $rows[PUBLISHER]>edit</a><br />
  PUBLISHED_DATE: $publisher_date <a href='editPublisherDate.php ?BOOKID=$rows[BOOKID]'? edit = $rows[PUBLISHER_DATE]>edit</a> <br />
ISBN:$ISBN <a href='editISBN.php ? BOOKID=$rows[BOOKID]'? edit = $rows[ISBN]>edit</a> <br />
 LANGUAGE:$language <a href='editLanguage.php ? BOOKID=$rows[BOOKID]'?edit = $rows[LANGUAGE]>edit</a><br />
  SUBJECT:$subject <a href='editSubject.php ?BOOKID=$rows[BOOKID]'?edit = $rows[SUBJECT]>edit</a> ";
}
}

else{
echo  "no record" ;
       
    }

?>

<style>

body {background-color:pink}


</style>


<form  method="post">
 
<button name="delete" type="submit"> DELETE</button>
  
</form>
 
