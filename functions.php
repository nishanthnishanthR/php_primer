<?php 
$title =  "Functions";
include 'includes/header.php' 
?>
    <h1><?php echo $title?></h1>

    <?php

        /*Defining a Function*/
        function writeMessage(){
            echo "You are really a nice person, Have a nice time!! <br/>";
        }

        /*calling function */
            writeMessage();

            echo "<hr/>";

            writeMessage();

            /* Functions with Parameters */

            function addfunctions($num1,$num2){
                $sum=$num1 + $num2;
                $num2=$num2 + 1;    
                echo"The sum of $num1 and $num2 is:$sum <br/>";
            }
            /*Pass by refrence - use ampersand in parameter*/
            function changenum(&$num){
                $num =$num+10;
                // $num+=10;

            }

            function returnproduct($num1,$num2){
                $prod = $num1=$num2;
                return $prod;
            }



            $num = 500;
            addfunctions(10,20);
            addfunctions(10,$num);
            addfunctions('10',"50");


            changenum($num);
            echo $num . '<br/>';



            $return_value = returnproduct(10,200);
            echo $return_value . '<br/>';
    ?>
    
    <?php require 'includes/footer.php' ?>