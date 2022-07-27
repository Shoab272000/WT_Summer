<?php
include("../model/db.php");
if(isset($_POST["sm"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $ag=$_POST["age"];
    $desg=$_POST["designation"]; 
    $eml=$_POST["email"];
    $pre=$_REQUEST["planguage"];
    $password=$_POST["password"];
    $file=$_POST["picture"];
    $mydb= new db();
    $myconn = $mydb->openCon();
    $mydb->insertUser($fname,$lname,$ag,$desg,$pre,$eml,$password,$file,"employee",$myconn);
}
?>