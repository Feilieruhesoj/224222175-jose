<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Activity 1</h1>
    <?php
        $number = 2;

        while ($number <= 20) {
            echo $number . "\n";
            $number += 2;
        }
    ?>

<h1>Activity 2</hp>
    <?php
        $correctPassword = "password123";
        $inputPassword = "";

        do {
            $inputPassword = readline("Please enter your password: ");

            if ($inputPassword !== $correctPassword) {
                echo "Incorrect password. Try again.\n";
            }else{
                break;
            }

        } while ($inputPassword !== $correctPassword);

        echo "Access Granted.\n";
    ?>

        



    <h1>Activity 3</h1>
    <?php
        $number = 7;

        for ($i = 1; $i <= 10; $i++) {    
            $result = $number * $i;
            
            echo "$number x $i = $result <br>" ;
        }
    ?>

    <h1>Activity 4</h1>
    <?php

        for ($i = 1; $i <= 10; $i++) {
            if ($i == 5) {
                continue;
            }
            if ($i == 9) {
                break;
            }
            echo $i ." " ;
        }
    ?>
    
    <h1>Activity 5 </h1>
    <?php
        $number = 1;
        $sum = 0;

        while ($number <= 100) {
            $sum += $number;
            $number++;
        }

        echo "The sum of numbers from 1 to 100 is: $sum ";
    ?>

    <h1>Activity 6 </h1>
    <?php
        $x = 0;
        $favoriteMovies = ["The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasite"];

        foreach ($favoriteMovies as $movie) {
            $x = $x+1;
            echo  $x . ". " . $movie . "\n";
        }
    ?>


    <h1>Activity 7 </h1>
    <?php
        $studentInfo = [
            "Name" => "Alice",
            "Age" => 20,
            "Grade" => "A",
            "City" => "Baguio"
        ];

        $x = 0;
        foreach ($studentInfo as $key => $value) {

            echo "$key: $value\n";
        }
    ?>


    <h1>Activity 8 </h1>
    <?php
        $number = 5;

        $factorial = 1;

        for ($i = $number; $i > 0; $i--) {
            $factorial *= $i;
        }

        echo "Factorial of $number is: $factorial\n";
        ?>

    <h1>Activity 9 </h1>
    <?php
        for ($i = 1; $i <= 50; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz ";
            }
            elseif ($i % 3 == 0) {
                echo "Fizz ";
            }
            elseif ($i % 5 == 0) {
                echo "Buzz ";
            }
            else {
                echo "$i ";
            }
        }
    ?>

    <h1>Activity 10 </h1>
    <?php
            $number = 29; 

            $isPrime = true;

          
            if ($number < 2) {
                $isPrime = false;
            } else {
               
                for ($i = 2; $i <= sqrt($number); $i++) {
                    if ($number % $i === 0) {
                        $isPrime = false; 
                        break;
                    }
                }
            }

            if ($isPrime) {
                echo "$number is a prime number.";
            } else {
                echo "$number is not a prime number.";
            }
    ?>

    <h1>Activity 11 </h1>
    <?php
        $fibonacci = [0, 1];
        $counter = 2; 

        while ($counter < 10) {
            $nextNumber = $fibonacci[$counter - 1] + $fibonacci[$counter - 2];
            
            $fibonacci[] = $nextNumber;

            $counter++;
        }

        foreach ($fibonacci as $number) {
            echo $number . "\n";
        }
    ?>

    <h1>Activity 12</h1>

    <?php
        $inputString = "Hello, World!";

        $reversedString = "";

        $stringLength = strlen($inputString);

        for ($i = $stringLength - 1; $i >= 0; $i--) {
            $reversedString .= $inputString[$i]; 
        }

        echo "Input: " . $inputString;
        echo "Output: " . $reversedString;
    ?>


</body>
</html>