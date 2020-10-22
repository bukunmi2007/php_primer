<?php 

    $title = 'Index';
    include 'includes/header.php'
?>   
    <h1> <?php echo $title ?> </h1>

    <!-- Basic HTML  -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>

    <?php 
        //Printing to HTML using echo  
        echo 'Hello PHP';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    

    
        /* Variables need a '$'. They are not strongly typed */
        $name = 'Bukunmi Abiina';
        $age = 21;

        //echo variable
        echo $name;

        echo '<h1> My name is: ' .$name. '</h>';
        echo '<h1> My age is: ' .$age. '</h>';

        // Echo using double quotes and interpolation

        echo "<h1> My name is: $name </h>";

    ?>

    <button type="button" class="btn btn-info"> Click </button>

 <?php require 'includes/footer.php' ?>