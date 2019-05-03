
<?php
    
    $email=$_POST["email"];
  
    $conn=mysql_connect("localhost","root","root");
    mysql_select_db("huarch");

    $sql="delete from `student` where `email`='".$email."'";
    if ($result=mysql_query($sql,$conn)){
        print("delete done ");
    }
    else
        print("wut");

    mysql_close($conn);

    ?>

    <!DOCTYPE HTML>
<HTML>
    <head>
        <title>FirstPage</title>
        <meta charset="utf-8">
         <link rel = "stylesheet"
            type = "text/css"
            href = "FirstPageStyle.css" />
    </head>
    <BODY id="BODY" >
    
      </BODY>
</HTML>