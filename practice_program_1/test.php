<?php
# to run php program type "php practice_program_1/test.php" in the terminal

$test_number = 67; # variable creation
echo $test_number + 2; # echo will output the code to the terminal

$fav_number = 'sixty-seven'; #\n is used for new line
echo "\n" . 'My favorite number is ' . $fav_number; # period is used for concatenation
echo "\nMy favorite number is $fav_number"; #double quotes is used for directly access into variables

function triangleArea($height,$base) { #function name(argument, separated by comma if multiple)
    return ($height * $base)/2;
}

$triangle_area = triangleArea(6,7); # wrapping functions is possible by function2(function1(argument)) function2 uses function 1 as an argument

if ($triangle_area >= 21 ) { # the parentheses store the argument
    echo "\nThe area of this triangle is 21 or greater";
} else {
    echo "The area of this triangle is less than 21";
}