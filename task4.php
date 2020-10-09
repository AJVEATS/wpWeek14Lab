<!DOCTYPE html>
<html>
    <head>
        <title>
            Control structures task 2.1
        </title>
    </head>
    <body>
        <h1>Comapring two variables to see if they are equal or identical</h1>
        <?php
            $number = 1;
            $booleanValue = true;
            if ($number == $booleanValue) {
                echo "<p>These two variables are equal</p>";
            } else {
                echo "<p>These two variables are not equal</p>";
            }
            if ($number === $booleanValue) {
                echo "<p>These two variables are identical</p>";
            } else {
                echo "<p>These two variables are not identical</p>";
            }
        ?>
    </body>    
</html>