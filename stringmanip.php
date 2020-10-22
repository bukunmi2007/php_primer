<?php 

    $title = 'String Manipulation';
    include 'includes/header.php'

?>   
    <h1> <?php echo $title ?> </h1>

    <?php
        //concatenation of strings

        $phrase1 = "Its a new season,";
        $phrase2 = "Fresh anointing flowing my way";

        //echo $phrase1.$phrase2;

        echo $phrase1 . " Its a new day, " . $phrase2;
        echo "<br/>";
        echo "<hr/>";
        //string transformation using
        // ucfirst
        //ucwords
        //stroupper
        //strtolower

        $phrase3 = 'kingston jamaica';

        echo "This capitalizes the first letter in the sentence ". ucfirst($phrase3). "<br/>";
        echo "This capitalizes the first letter of every word ". ucwords($phrase3). "<br/>";

        echo "This will be shown in upper case: ". strtoupper($phrase3). "<br/>";

        echo "This will be transformed to lower case: " . strtolower("MY GOD IS GOOD"). "<br/>";
        echo "<hr/>";

        echo "The letter a will be repeated 10 times: ". str_repeat('a',10). "<br/>";
        echo "Capitalized letter a will be repeated 10 times: ". strtoupper (str_repeat('a',10)).
         "<br/>";

         echo "Get a substring: ". substr($phrase3, 4, 10). '<br/>';

         echo "Get position of string, 'j' is written in position: ". strpos($phrase3, 'j'). 
         '<br/>';


         //find character in a string
         echo "Find character 'S': " . strchr($phrase3, 'S'). "<br/>";
         echo "Find character 's': " . strchr($phrase3, 's'). "<br/>";
         echo "Find character 'j': " . strchr($phrase3, 'j'). "<br/>";
         echo "Find character 'o': " . strchr($phrase3, 'o'). "<br/>";

         echo "<hr/>";

         echo "FInd the length of a String: " . strlen($phrase3). "<br/>";

         echo "<hr/>";

         echo "Without Trim: " . "A " . " B C D " . " E" . '<br/>';

         echo "Trim spaces on both sides: " . " A" . trim(" B C D ") . "E" . '<br/>';
         echo "Trim spaces on both sides: " . " A" . ltrim(" B C D ") . "E" . '<br/>';
         echo "Trim spaces on both sides: " . " A" . rtrim(" B C D ") . "E" . '<br/>';

         echo "<hr/>";

         echo "Replace string with another: " . str_replace ('kingston', 'Mobay', $phrase3). '<br/>';



    ?>
    
<?php require 'includes/footer.php' ?>