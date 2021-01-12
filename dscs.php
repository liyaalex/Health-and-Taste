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
        function myTest()
        {
            static $x=0;
            echo $x;
            $x++;
            
        }
        myTest();
        myTest();
        myTest();
        
        echo strpos("Welcome to isi college!","isi");
        
        ?>
    </body>
</html>
