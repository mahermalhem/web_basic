 <!DOCTYPE html>
 <html>
 <head>
     <title>reg sucessfully done</title>
 </head>
 <body>
 
 </body>
 </html>

 <?php
    
    $ID=$_POST["ID"];
  	$firstName=$_POST["firstName"]; 
  	$lastName=$_POST["lastName"];
  	$email=$_POST["email"];
    $fpassword=$_POST["fpassword"];
    $cpassword=$_POST["cpassword"];
    $liveIn=$_POST["liveIn"];
    $phone=$_POST["phone"];
    $gender=$_POST["gender"];
    $story=$_POST["story"];

    $conn=mysql_connect("localhost","root","root");
    mysql_select_db("huarch");
    $sql="INSERT INTO  `huarch`.`student` (
        `id` ,
        `firstName` ,
        `lastName` ,
        `email` ,
        `fpassword` ,
        `cpassword` ,
        `liveIn` ,
        `phone` ,
        `gender` ,
        `story`
        )
        VALUES (
        '".$ID."','".$firstName."','".$lastName."',  '".$email."',  '".$fpassword."','".$cpassword."','".$liveIn."', '".$phone."','".$gender."',  '".$story."'
        );";
    if ($result=mysql_query($sql,$conn)) {
        print("done");
    }
    else
    mysql_close($conn);
    include("FirstPage.html");


    ?>