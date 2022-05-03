    <?php
     $title =  "Index";
     include 'includes/header.php' 
     ?>


<!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php    
    // Printing to HTML using echo
        echo 'Hello PHP!';
        echo '</br>';
        echo 'Second Line';
        echo '</br>';
        // declare variable
        $name='Nishanth R';
        $age='20';
        // echo variable
        echo $name;
        echo '<h1>My Name Is : '.$name.'</h1>';
        echo '<h1>My Age Is : '.$age.'</h1>';
        // Echo using double quotes and interpolationtr
        echo "<h1>My Name Is : $name </h1>";

    ?>
    <button type="button" class="btn btn-dark">Dark</button>
<?php require 'includes/footer.php' ?>