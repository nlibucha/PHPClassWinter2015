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
        //  $_POST
        
            if ( isset($_POST['fname'] ) ) {
                echo $_POST['fname'];
            }
            
             if ( isset($_POST['email'] ) ) {
                echo $_POST['email'];
            }
        
            include './validation.php'
        ?>
    </body>
</html>
