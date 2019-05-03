<?php 
    
    $id=$_POST["id"];
    $fpassword=$_POST["fpassword"];
    $conn=mysql_connect("localhost","root","root");
    mysql_select_db("huarch");
    $sql="SELECT *FROM  `student`  WHERE id =".$id;
    if ($result=mysql_query($sql,$conn)){
        while ($f=mysql_fetch_row($result)) {
            $rowData = array('id' => $f[0],
             'firstName' => $f[1],
             'lastName' => $f[2],
             'email' => $f[3],
             'fpassword' => $f[4],
             'cpassword' => $f[5],
             'liveIn' => $f[6],
             'phone' => $f[7],
             'gender' => $f[8],
             'story' => $f[9], 
             );
        }
    }
    print('<table width=500px height=400px style="position: absolute;top: 10%;right: 30%;border-style:solid ;border-width:thick;
        border-color: lightgray">
           <tr>
              <th colspan="2"><img src="'.$rowData['gender'].'.png" alt="it dosn`t exist any more" width="180" height="250"></th>
              <th><h2>'.$rowData['firstName'].' '.$rowData['lastName'].'</h2></th>
           </tr>
           <tr>
               <td><em>'.$rowData['story'].'</em></td>
           </tr>
           <tr>
               <td><h3>'.$rowData['liveIn'].'</h3></td>
               <td>
                    <ul style="list-style-type:upper-roman"><b>contact information<b>
                        <li>phone:'.$rowData['phone'].'</li>
                        <li>email:<a href="mailto:'.$rowData['email'].'">'.$rowData['email'].' </a></li>
                    </ul>
               </td>
           </tr>
           <tr> <form method="post" action="Editphp.php">
           <input type="submit" name="submit" value="EDIT">
           <input type="text" name="id" value="'.$id.'"> 
             </form></tr>
             </table>');


?>

<!DOCTYPE HTML>
<HTML>
    <head>
        <title>My Profile</title>
        <meta charset="utf-8">
         <link rel = "stylesheet"
            type = "text/css"
            href = "myProfileStyle.css" />
    </head>
    <BODY id="BODY" >
    </BODY>
</HTML>