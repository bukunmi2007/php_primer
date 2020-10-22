<?php 

    $title = 'Date and Time Manipulation';
    include 'includes/header.php'

?>   
    <h1> <?php echo $title ?> </h1>

    <?php

        $datenow = getdate();

        echo "<p> Today's date is: " . $datenow ['mday'] .
        'in the month of ' . $datenow['mon'] . 'in the year ' . 
        $datenow ['year'] . '</p>';        
        
        echo "<p> Today's date is: " . $datenow ['mday'] .
        ' / ' . $datenow['mon'] . ' / ' . 
        $datenow ['year'] . '</p>'; 

        //computer unix time
        echo time() . '<br/>';

        print date("d/m/y G:i:s <br/>", time()) . '<br/>';

        print ' Today is:';
        print date ("j of F Y, \\ g.i a", time());

    ?>
    
<?php require 'includes/footer.php' ?>