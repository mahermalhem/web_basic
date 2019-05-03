<?php 
    
     $id=$_POST["id"];
    $firstName=$_POST["firstName"]; 
    $lastName=$_POST["lastName"];
    $email=$_POST["email"];
    $fpassword=$_POST["fpassword"];
    $cpassword=$_POST["cpassword"];
    $liveIn=$_POST["liveIn"];
    $phone=$_POST["phone"];
    $gender=$_POST["gender"];
    $story=$_POST["story"];

    
    $id=$_POST["id"];
    $conn=mysql_connect("localhost","root","root");
    mysql_select_db("huarch");

    $sql="UPDATE  `huarch`.`student` SET 
`firstName` =  '".$firstName."',
`lastName` =  '".$lastName."',
`email` =  '".$email."',
`fpassword` =  '".$fpassword."',
`cpassword` =  '".$cpassword."',
`liveIn` =  '".$liveIn."',
`phone` =  '".$phone."',
`gender` =  '".$gender."',
`story` =  '".$story."' WHERE  `student`.`id` =".$id;

    $result=mysql_query($sql,$conn) or die(mysql_error());
        print("ur data has been updated");
        include("halo1.html");
        
?>

<!DOCTYPE HTML>
<HTML>
    <head>
        <title>My Profile</title>
        <meta charset="utf-8">
         <link rel = "stylesheet"
            type = "text/css"
            href = "EditStyle.css" />
    </head>
    <BODY id="BODY" >


    </BODY>
</HTML>