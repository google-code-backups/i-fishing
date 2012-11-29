<?php
include'config.php';
// we check if everything is filled in

if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['P1']) || empty($_POST['J1']) || empty($_POST['P2']) || empty($_POST['J2']))
{
	die(msg(0,"Semua field harus terisi!"));
}


// is the sex selected?

if(!(int)$_POST['sex'])
{
	die(msg(0,"You have to select your sex"));
}


// is the birthday selected?

if(!(int)$_POST['day'] || !(int)$_POST['month'] || !(int)$_POST['year'])
{
	die(msg(0,"You have to fill in your birthday"));
}


// is the email valid?

if(!(preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $_POST['email'])))
	die(msg(0,"You haven't provided a valid email"));


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$sex = $_POST['sex'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$P1 = $_POST['P1'];
$J1 = $_POST['J1'];
$P2 = $_POST['P2'];
$J2 = $_POST['J2'];

$strSQL = "INSERT INTO member VALUES ('$fname','$lname','$email','$pass','$sex','$day','$month','$year','$P1','$J1','$P2','$J2')";

$qry = @mysql_query($strSQL,$conn)

or die ("Query salah, karena: " . mysql_error());
// Here you must put your code for validating and escaping all the input data,
// inserting new records in your DB and echo-ing a message of the type:

// echo msg(1,"/member-area.php");

// where member-area.php is the address on your site where registered users are
// redirected after registration.




echo msg(1,"upreg.html");


function msg($status,$txt)
{
	return '{"status":'.$status.',"txt":"'.$txt.'"}';
}
?>
