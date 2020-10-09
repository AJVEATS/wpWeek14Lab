<!DOCTYPE html>
<html>
    <head>
        <title>
            Control structures task 2.2
        </title>
    </head>
    <body>
        <h1>Comapring two variables to see if they are equal or identical using OR or XOR</h1>
        <?php
            $number = 1;
            $booleanValue = true;
            if ($number OR $booleanValue) {
                echo "<p>First loop first statement initiated</p>";
            } else {
                echo "<p>First loop second statement initiated</p>";
            }
            if ($number XOR $booleanValue) {
                echo "<p>Second loop first statement initiated</p>";
            } else {
                echo "<p>Second loop second statement initiated</p>";
            }
        ?>
    </body>    
</html>