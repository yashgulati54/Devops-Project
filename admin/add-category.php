<?php
session_start();
include('includes/dbconnection.php');
include('includes/checklogin.php');
check_login();
if(isset($_POST['submit']))
{
$catcode=$_POST['catcode'];
$catname=$_POST['catname'];
$description=$_POST['description'];
$query=mysql_query("insert into category(categoryCode,categoryName,description) values('$catcode','$catname','$description')");
if($query)
{
	echo "<script>alert('Category created');</script>";
}
else
{
	echo "<script>alert('Something went wrong please try again.');</script>";
}

}
?>