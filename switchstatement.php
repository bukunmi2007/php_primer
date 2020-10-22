<?php 

    $title = 'Switch Statement';
    include 'includes/header.php'

?>   
    <h1> <?php echo $title ?> </h1>

    <?php
        $grade = 'F';

        switch($grade){
            case 'A':
                echo '<h2 style="color: green"> You did excellently well </h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue"> You did very well </h2>';
                break;
            default:
            echo '<h2 style="color: red"> You have failed </h2>';
        }
    ?>

<?php require 'includes/footer.php' ?>