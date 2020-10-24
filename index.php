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
    </br>
    <button type="button" class="btn btn-primary"> Click </button>
    <button type="button" class="btn btn-success"> Click </button>
    <button type="button" class="btn btn-info"> Click </button>

    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>

 <?php require 'includes/footer.php' ?>