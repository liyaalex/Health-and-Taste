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
    include '../admin/head.php';

 try
 {
        
        
     $user1=$_REQUEST["user"];
     echo $user1;
 
    $sql1 = "DELETE FROM users WHERE username='$user1'"; 
  
    if($obj->execute($sql1)===TRUE)
    {
      echo "<script type='text/javascript'>location.href = 'adminhome.php';</script>";   
    }
  
  
        
        

 }
 catch(Exception $e)
 {
     echo $e->getMessage();
 }











?>   
    </body>
</html>
