<!DOCTYPE html>
<html>
    <head>
        <title>
            HTML tables and PHP
        </title>
    </head>
    <body>
        <h1>HTML tables and PHP</h1>
        <?php
            $programmerSalary = "£35,000";
            $softwareEngineerSalary = "£50,000";
            $groupLeadSalary = "£55,000";
        ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Salary</th>
            </tr>
            <tr>
                <th>Alexander Veats</th>
                <th>Programmer</th>
                <th><?php echo $programmerSalary;?></th>
            </tr>
            <tr>
                <th>Alex Veats</th>
                <th>Software Engineer</th>
                <th><?php echo $softwareEngineerSalary;?></th>
            </tr>
            <tr>
                <th>Al Veats</th>
                <th>Group Lead</th>
                <th><?php echo $groupLeadSalary;?></th>
            </tr>
        </table>
    </body>    
</html>