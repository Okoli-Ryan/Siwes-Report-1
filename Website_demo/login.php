<?php
/**
 * Created by PhpStorm.
 * User: Ugo
 * Date: 06/03/2019
 * Time: 09:15
 */
$db_hostname = 'localhost';
$db_database = 'pub';
$db_username = 'ryan';
$db_password = 'ryanology';

$db_tables = "signup";

$pdo = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_username, $db_password);

//global $a, $i;
//$i = array();
//
//function getVariables(){
//    global $author, $type, $year, $title, $isbn;
//
//    $author = $_POST['author'];
//    $type = $_POST['type'];
//    $year = $_POST['year'];
//    $title= $_POST['title'];
//    $isbn = $_POST['isbn'];
//}
//
//
//if (isset($_POST['insert']))
//{
//    $author = $_POST['author'];
//    $type = $_POST['type'];
//    $year = $_POST['year'];
//    $title= $_POST['title'];
//    $isbn = $_POST['isbn'];
//       // getVariables();
//
//$insert = $pdo->query(<<<_END
//insert into $db_tables(author, type, year, title, isbn)
//values('$author', '$type', '$year', '$title', '$isbn')
//
//_END);
//
//echo "<br/> . info inserted!";
//
//}
//
//elseif
//(isset($_POST['show'])){
//
//$show = $pdo->query("select * from $db_tables", 1);
//
//$a = 0;
//foreach ($show as $row) {
//    echo $row['author'] . "<br />";
//    echo $row['type'] . "<br />";
//    echo $row['year'] . "<br />";
//    echo $row['title'] . "<br />";
//    echo $row['isbn'] . "<br />";
//    $i[$a] = $row['isbn'];
//    echo <<<_END
//<form action="remove.php" method="post">
//<input type="submit" name="remove" value="remove info">
//<input type="hidden" name="stuff" value='$i[$a]'>
//<br /><br />
//</form>
//_END;
//
//    $a++;
//}
//
//}
//
