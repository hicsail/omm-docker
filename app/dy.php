<?
 // Connect to the MySQL database
$username="walkevent";
$password="#*$!#*$!";
$database="bank";

mysql_connect("localhost",$username,$password);
mysql_select_db($database) or die( "Unable to select database");

$name = mysql_real_escape_string(htmlentities($_POST['name'])); 
$email = mysql_real_escape_string(htmlentities($_POST['email'])); 
$phone = mysql_real_escape_string(htmlentities($_POST['phone']));
$teamName = mysql_real_escape_string(htmlentities($_POST['teamName']));

$query = "CREATE TABLE $teamName (id int(6) NOT NULL auto_increment,name varchar(60) NOT NULL,email varchar(50) NOT NULL,phone varchar(15) NOT NULL,INDEX (id))";

$query = "INSERT INTO $teamName VALUES ('','$name','$email','$phone')";

mysql_query($QueryOne); 
if(!mysql_error()) { 
// Confirmation 
} else { 
}

mysql_query($query); 

?>