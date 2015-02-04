<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $car = filter_input(INPUT_POST, 'cars');
        var_dump($car);
        
        $selected = 'selected="selected"';
        
        ?>
        
<form action="#" method="post">   
    <select name="cars">
        <option value="ford" >ford</option>
        <option value="honda">honda</option>
        <option value="kia">kia</option>
    </select>
            
<br /><input type="submit" value="Submit" />
</form>
        
    </body>
</html>
