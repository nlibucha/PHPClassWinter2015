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
           $name = '';
           $email = '';
           $num = 0;           
           $err_msg = '';
           
            if ( !empty ( $_POST ) ) {             
         
                $name = $_POST['fname'];
                $email = $_POST['email'];
                $num = $_POST['number'];
                
                if ( !is_string($name) || empty($name) ) {
                    $err_msg .= '<p>Please enter a name</p>';
                }
                if ( !is_string($email) || empty($email) ) {
                    $err_msg .= '<p>Please enter an Email</p>';
                }
                if ( !is_numeric($num) || empty($num) ) {
                    $err_msg .= '<p>Please enter a number</p>';
                }
                
                
            }
        
        ?>
    </body>
</html>
