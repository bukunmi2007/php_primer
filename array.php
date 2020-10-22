<?php 
    $title = 'Array';
    include 'includes/header.php'
    
    ?>

    <h1> <?php echo $title ?> </h1>

    <?php

        $numbers = array(1,2,3,4,5,6,7,8,9,22, 56, 78, 98, 87, 90);

        echo "<h2>The fifth element in the array is $numbers[6] </h2>" ;
        //echo  $number[6] ;

        $size = count($numbers);

        echo "<p> There are $size elements in this array </p>";

        //To print the elements in the array one after the other until it is exhausted

        for($count =0; $count < $size; $count++){
            echo "<p>The element in position $count is $numbers[$count] <p>";
        }

    ?>

 <?php require 'includes/footer.php' ?>