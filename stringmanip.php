<?php 
$title =  " PHP String Manipulation";
include 'includes/header.php' 
?>
<h1><?php echo $title?></h1>
    <?php
    // COncatenation of string
    $phrase1 = "student who came late";
    $phrase2 = "in class, stand with Rock";
    $name = "nishanth sharma";
    echo $phrase1 .", named Tiffany , ". $phrase2;   
    echo '<br/>';
    echo '<hr/>';
    // String transformation
    echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
    echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
    echo 'Upper case : ' . strtoupper($name).'<br/>';
    echo 'Upper case : ' . strtolower("THIS WAS ALL UPPER CASE").'<br/>';
    echo '<hr/>';
    echo 'Repeat String: ' .str_repeat('a',10). '<br/>';
    echo 'Repeat String - Nested Function: ' .strtoupper(str_repeat('a',10)). '<br/>';
    echo 'Get a Substring: ' .substr($name, 0, 20). '<br/>';
    echo 'Get a Substring - Nested Function: ' .strtoupper(substr($name, 0, 20)). '<br/>';

    echo 'Get position of String: ' . strpos($name, 's'). '<br/>';
    // Returns Null
    // echo 'Get position of String: ' . strpos($name, 's'). '<br/>';
    echo 'Find Character "i": ' . strchr($name, 'i').'<br/>';
    echo 'Find Character "r": ' . strchr($name, 'r').'<br/>';
    echo 'Find Character "s": ' . strchr($name, 's').'<br/>';
    echo 'Find Character "m": ' . strchr($name, 'm').'<br/>';

    echo'Finds the Length of the String: ' .strlen($name). '<br/>';

    echo 'Without Trim: ' ."A" . "B C D " . "E" . '<br/>';
    echo 'Trims spaces on both sides: '. "A" .trim(" B C D ") . "E" .'<br/>';
    echo 'Trims spaces to the left: '. "A" .ltrim(" B C D ") . "E" .'<br/>';
    echo 'Trims spaces to the right: '. "A" .rtrim(" B C D ") . "E" .'<br/>';

    echo 'Replace String with another:' . str_replace("stand","sit",$phrase2) . '<br/>';
    ?>
<?php require 'includes/footer.php' ?>