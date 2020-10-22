<?php 

    $title = 'If Statement';
    include 'includes/header.php'

?>   
    <h1> <?php echo $title ?> </h1>

    <?php 
        // An If statement that will carry out an action based on the value of the variable"
    
        echo "<h2> If Statement </h2>";

        $grade = 30;

        if($grade >= 50){
            echo '<h3 style="color: green"> You have passed</h>';
        }
        else{
            echo '<h3 style="color: red"> You have failed </h3>';
        }


        $grade = 'A';
        
        if($grade == 'A'){
            echo '<h2 style="color: green"> You did excellently well </h2>';
        }
        elseif($grade == 'B'){
                echo '<h2 style="color: blue"> You did very well </h2>';
            }
            else{
                echo '<h2 style="color: red"> You did well </h2>';
            }
    ?>
    
 <?php require 'includes/footer.php' ?>