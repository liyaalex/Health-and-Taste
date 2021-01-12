<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include '../user/head.php';
        $psd=$_POST["psd"];
        $email=$_POST["email"];
        
        
        
        
        
        $sql="update users set password='$psd',mail='$email' where username='$user'";
        if($obj->execute($sql)===TRUE)
        {
             echo "<script type='text/javascript'>location.href = 'myProfile.php';</script>"; 
        }
        
        
        ?>
    </body>
</html>
