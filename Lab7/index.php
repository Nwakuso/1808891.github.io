<?php
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
      $myname ="Edgar";

      if ( $myname == "Simon") {
        print  "I know you!";
      }
      else{
         print "who are you?";
      }
      ?>

    <?php
         $numberofHobbits = 2;

         switch ($numberOfhobbits) {
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
        ?>
</p>
</body>
</html>
