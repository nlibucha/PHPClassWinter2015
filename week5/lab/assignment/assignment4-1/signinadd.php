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
        // put your code here
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $error_message = '';
        //validation email 
        if (empty($email)) {
            $error_message .= "*email is a required field.<br />";
        }
        if (!is_string($email)) {
            $error_message .= "*Name must contain valid data.<br />";
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            $error_message .= '<p>email not formatted correctly</p>';
        }
        //passwords
        if (empty($password)) {
            $error_message .= "*password is a required field.<br />";
        }
        if (strlen($password) < 4) {
            echo '<p>pass must be greater than 3 chars</p>';
        }
        if (!empty($error_message)) {
            echo $error_message;
            include './Signin.php';
            exit();
        }
        $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");
        $dbs = $db->prepare('insert signup set email = :email, password = :password');
        // you must bind the data before you execute
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        $dbs->bindParam(':password', $password, PDO::PARAM_STR);
        // executes work
        if ($dbs->execute() && $dbs->rowCount() > 0) {
            echo '<h1> Email ', $email, ' was added</h1>';
        } else {
            echo '<h1> Email ', $email, ' was <strong>NOT</strong> added</h1>';
        }
        ?>
    </body>
</html>