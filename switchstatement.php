<?php
$title =  "Switch Statements";
include 'includes/header.php' 
?>
    <h1><?php echo $title?></h1>
    <?php
    // Variable Declaration
        $grade = 'A';
        // Switch($variable) will scrutinuze the value of the variable aganist the cited cases.
        switch($grade){
            case 'A':
                echo '<h2   style="color: green">YOU ARE A SUPER STAR!</h2>';
                break;
            case 'B':
                echo '<h2  style="color: blue"> YOU DID WELL!!</h2>';
                break;
            default:
            echo '<h2  style="color: red"> YOU HAVE FAILED......</h2>';
            break;
        }
    ?>
<?php require 'includes/footer.php' ?>