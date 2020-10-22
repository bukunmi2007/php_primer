<?php 

    $title = 'While Do While Loop';
    include 'includes/header.php'

?>   
    <h1> <?php echo $title ?> </h1>

    <h1>While Loop</h>

    <?php
        $grade = 0;

        // This type of Loop Checks the Condition before doing the action,
       // if the condition is not met from the get go, it wont do it

       //Pre-Condition Loop

        while($grade < 10){
            echo "<p> I am less than 10</p>";
            $grade++;
        }

        echo "While Loop has been exited";
    ?>
    
    <h1>Do While Loop</h>
        
    <?php
    // This type of Loop carries out the action once before checking the condition
    //Post-condition Loop
        $age = 100;

        do{ 
            echo "<p> I am 100 years old <p>";

            $age--;

        }while($grade > 100);
    ?>
   
<?php require 'includes/footer.php' ?>