<?php 

    $title = 'Functions';
    include 'includes/header.php'

?>   

<h1> <?php echo $title ?> </h1>

<?php

//defining a function
function writeMessage(){
    echo "Lord you are amazing, so amazing";
}

// Calling the function
writeMessage();
?>

<hr/>

<h2>Creating a Function with parameters</h2>

<?php

    function addNumbers($num1, $num2){
        $sum = $num1 + $num2;

        echo "The sum of $num1 and $num2 = $sum";
    }

    function changeNum(&$number){
        $number = $number + 10;
    }

    function productOfNumbers($num1,  $num2){
        $product = $num1 * $num2;
        return $product;
    }


    addNumbers(1,2);
    $num = 50;
    addNumbers($num, $num);
    echo '<br/>';
    addNumbers('4', '10');

        $num = 20;

    for($count= 0; $count <4; $count++){

        changeNum($num);
        echo $num . '<br/>';
    }
    
    echo productOfNumbers(10,20) . '<br/>';
?>

<?php require 'includes/footer.php' ?>