<?php

require __DIR__ . '/vendor/autoload.php'; #loading a seperate file in the vendor folder
use Cocur\Slugify\Slugify;

$slugify = new Slugify();
echo $slugify->slugify("The sky is blue, and the grass is green"); # '->' will look inside an object

# experiment with slugify

function triangleArea($height,$base) {
    return ($height * $base)/2;
}

$triangle_area = triangleArea(6,7);

if ($triangle_area >= 21) {
    echo "\n" . $slugify->slugify("The area of this triangle is greater than or equal to 21");
} else {
   echo "\n" . $slugify->slugify("The area of this triangle is less than 21");
}