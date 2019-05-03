<?php 
    
    $id=$_POST["id"];
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
    print('<form id="regForm" method="post" action="savechanges.php">
            <label>
                First Name :
                <input type="text" name="firstName" size="20"
                value="'.$rowData['firstName'].'">
            <br>
            <br>
            </label>    
            <label>
                last Name
                <input type="text" name="lastName" size="20" 
                value="'.$rowData['lastName'].'">
            </label>
            <br>
            <br>
            <label>email 
                <input type="email" name="email" size="20"
                value="'.$rowData['email'].'" >           
            </label>
            <br>
            <br>
            <label>collage ID DON`T CHANGE IT 
                <input type="text" name="id" max="7" size="20" value="'.$rowData['id'].'">
            </label>
            <br>
            <br>
            <label>
            <select name="liveIn" >
                <option selected="1" value="'.$rowData['liveIn'].'">amman</option>
                <option value="zarqa">zarqa</option>
                <option value="mafraq">mafraq</option>
                <option value="irbid">irbid</option>
                <option value="ramtha">ramtha</option>
                <option value="ma`an">ma`an</option>
                <option value="kark">kark</option>
                <option value="tafeleh">tafeleh</option>
                <option value="jarash">jarash</option>
                <option value="alaqaba">alaqaba</option>
                <option value="agloon">agloon</option>
                <option value="balqa">balqa`</option>
            </select>
            </label>
            <br>
            <br>
            <label>cell phone number
                <input value="'.$rowData['phone'].'" type="tel" pattern="07\d{8}" name="phone">format:07******
            </label>
            <br>
            <br>
            <label> Gender be aware of this:
                <input  type="radio" name="gender" value="male" selected>male
                <input type="radio" name="gender" value="female">female
            </label>
            <br>
            <br>
            <label>New Passowrd
                <input type="text"  name="fpassword" value='.$rowData['cpassword'].' size="20" width="100" >            
            </label>
            <br>
            <br>
            <label>a preif story about your self:
                </label><br>
                <textarea rows="4" name="story" placholder="write here">
                   '.$rowData['story'].'
                 </textarea>
                </label>
            </label>
            <br>
            <br>
            <label>
                <input type="submit"  value="Save changes">
            </label>
        </form>');

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