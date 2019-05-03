
<?php
    
    $id=$_POST["id"];
    $fpassword=$_POST["fpassword"];  

    $conn=mysql_connect("localhost","root","root");
    mysql_select_db("huarch");
    $sql="SELECT id,fpassword,firstName
        FROM  `student` WHERE id =".$id." AND fpassword =".$fpassword;
    if ($result=mysql_query($sql,$conn)){

    }
    else
        print("wut");
    mysql_close($conn);
    if($f=mysql_fetch_row($result)>0){
         if($id==0000 and $password==0000){
            print("hello Manager");
            print('<form action="test3mar.html" method="POST">
        <input type="submit" value="Remove students" name="submit">');
        }else{
        print('<form action="myProfilephp.php" method="POST">
        <input type="" name="id" value="'.$id.'">
        <input type="submit" value="My profile" name="submit">');
        include("halo1.html");
    }
        
    }
    else
    {
        print("user/password wrong");
    }

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
    </head>
    <body>
    </body>
    </html>