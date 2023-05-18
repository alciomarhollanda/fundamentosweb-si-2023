<?php
header('Content-Type: text/html; charset=utf-8');
include 'connect.php';
if(isset($_POST['sub'])){
    $nameCity=$_POST['nameCity'];
    
    // $i="insert into reg(name,username,password,city,image,gender)value('$t','$u','$p','$c','$img','$g')";
    $i="insert into city (nameCity) values ('$nameCity')";
    mysqli_query($con, $i);
}
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
    <meta charset=”UTF-8”>
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Name
                        <input type="text" name="nameCity">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">         
                    </td>
                    <td>
                        <a href="login.php"> Login</a>
                    </td>
                </tr>
            </table>
    </body>
</html>
