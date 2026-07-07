<?php

require __DIR__ . '/vendor/autoload.php'; #loading a seperate file in the vendor folder
use Cocur\Slugify\Slugify;

$slugify = new Slugify();
echo $slugify->slugify('The sky is blue, and the grass is green'); # '->' will look inside an object