<?php
$title =  "If-Else Statements";
 include 'includes/header.php' 
 ?>
<h1><?php echo $title?></h1>
    <h3 style="color: red"></h3>
    <?php


        // An If Statement that will carry out an action based on the view of the variable.

        echo '<h2>If Statement</h2>';

        $grade = 80;
        // ===, ==, >, <, >=,
        if($grade >= 50){
            echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
        }
        $grade = 'A';
        // If-Else If Else
        if($grade == 'A'){
            echo '<h2   style="color: green">YOU ARE A SUPER STAR!</h2>';
        }
        elseif ($grade == 'B'){
            echo '<h2  style="color: blue"> YOU DID WELL!!</h2>';
        }
        else{
            echo '<h2  style="color: red"> YOU HAVE FAILED......</h2>';
        }


    ?>
<?php require 'includes/footer.php' ?>