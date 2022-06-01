<?php
    $fn = $_GET["fname"];
    $ln = $_GET["lname"];

    $em = $_GET["email"];

    $pass = $_GET["password"];

    if(is_numeric($fn) || is_numeric($ln))
    {
        echo "First name and Last Name should not contain numeric value.<br>";
    }
    elseif(is_string($fn) || is_string($ln))
    {
        echo "Your name is ".$fn." ".$ln."<br>";
    }
   
    if(isset($_GET["desig"]))
    {
        $de = $_GET["desig"];
        echo "Your designation is ".$de."<br>";
    }
    else
    {
        echo "Designation must be selected<br>";
    }

    if(!isset($_GET["l1"]) && !isset($_GET["l2"]) && !isset($_GET["l3"]))
    {
        echo "Preferred language must be selected<br>";
    }
    else
    {
        echo "Your preferred languages are ";
        if(isset($_GET["l1"]))
        {
            $l1 = $_GET["l1"];
            echo $l1." ";
        }

        if(isset($_GET["l2"]))
        {
            $l2 = $_GET["l2"];
            echo $l2." ";
        }

        if(isset($_GET["l3"]))
        {
            $l3 = $_GET["l3"];
            echo $l3." ";
        }
        echo "<br>";
    }

    

    if(empty($em))
    {
        echo "Email should not be empty<br>";
    }
    else
    {
        echo "Your E-mail is ".$em."<br>";
    }

    if(strlen($pass)>6)
    {
        echo "Your password is ".$pass."<br>";
    }
    else
    {
        echo "Password should be more than 6 characters";
    }
?>