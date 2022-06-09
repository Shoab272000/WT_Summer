<?php
    $uvalid = "";
    $agevalid = "";
    $langvalid = "";
    $langvalid1 = "";
    $langvalid2 = "";
    $langvalid3 = "";
    $evalid = "";
    $pvalid = "";
    $dvalid = "";
    $filvalid = "";

    $fn = "";
    $ln = "";
    $uname = "";
    $a = "";
    $l = "";
    $l1 = "";
    $l2 = "";
    $l3 = "";
    $em = "";
    $pass = "";
    $file_name = "";


    if(isset($_POST["sub"]))
    {
        $fn = $_POST["fname"];
        $ln = $_POST["lname"];
        if(is_numeric($fn) || is_numeric($ln))
        {
            $uvalid = "First name and Last Name should not contain numeric value.";
        }
        elseif(!empty($fn) || !empty($ln))
        {
            $uname = $fn." ".$ln."";
            $uvalid = "Your name is ".$fn." ".$ln."";
        }

        $a = $_POST["age"];
        if(empty($_POST["age"]))
        {
            $agevalid = "Age should not be empty";
        }
        else
        {
            $agevalid = "You are ".$a." years old";
        }

        if(!isset($_POST["l1"]) && !isset($_POST["l2"]) && !isset($_POST["l3"]))
        {
            $langvalid = "Preferred language must be selected";
        }
        else
        {
            $langvalid = "Your preferred languages are ";
            if(isset($_POST["l1"]))
            {
                $l1 = $_POST["l1"];
                $langvalid1 = $l1." ";
            }

            if(isset($_POST["l2"]))
            {
                $l2 = $_POST["l2"];
                $langvalid2 = $l2." ";
            }

            if(isset($_POST["l3"]))
            {
                $l3 = $_POST["l3"];
                $langvalid3 = $l3." ";
            }
            $l = $l1." ".$l2." ".$l3;
        }

        $em = $_POST["email"];

        if(empty($em))
        {
            $evalid = "Email should not be empty";
        }
        else
        {
       
            $evalid = "Your E-mail is ".$em."";
        }

        $pass = $_POST["password"];

        if(strlen($pass)>6)
        {
            $pvalid = "Your password is ".$pass."";
        }
        else
        {
            $pvalid = "Password should be more than 6 characters";
        }

        $target_dir = "../uploads/";
        $target_file = $target_dir . $_FILES["filetoupload"]["name"];

        if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file))
        {
            $file_name = $_FILES["filetoupload"]["name"];
        } else {
            $filvalid = "Sorry, there was an error uploading your file.";
        }

        $myarr = array("UserName"=>$uname,
                        "Age"=>$a,
                        "Preferred Languages"=>$l,
                        "E-Mail"=>$em,
                        "Password"=>$pass,
                        "File_Name"=>$file_name);

        $jsonarr = json_encode($myarr, JSON_PRETTY_PRINT);
        if(file_put_contents("../data/data1.json",$jsonarr))
        {
            $dvalid = "Data Uploaded";
        }
        else
        {
            $dvalid = "Can't Upload";
        }
    }
?>