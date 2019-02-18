<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    echo "Hello World";
    echo "Hello," . " ". "world" . "!";
    echo 5 * 7;
    $myname = "Frodo Baggins";
    $myage = 111;
    echo "My name is" . $myname . "and i am" . $myage;
    echo "I get printed!"

    ?>
    <?php
    $name ="Edgar";

    if ( $name == "Simon") {
        print  "I know you!";
    }
    else{
        print "who are you?";
    }
    ?>

    <?php

    $numberofHobbits = 2;

    switch ($numberofHobbits) {
        case 1:
            echo "1 sad hobbit";
            break;
        case 2:
            echo "2 happy hobbits";
            break;
        case 3:
            echo "3 hobbits are a crowd";
            break;
        default:
            echo "All the hobbits have gone home";
    }
    $myArray = array("do","re", "mi"); //declares the array

    echo $myArray[0] //outputs "do"

    $myArray[1] = "la"; //modifies position 1 (re)

    echo $myArray[1] //outputs "la"

    unset($myArray[2]); //removes the array in position 2
    ?>
</p>
</body>
</html>
