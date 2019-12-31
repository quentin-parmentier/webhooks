<?php

if(file_exists("post.txt")) unlink("post.txt");

$monfichier = fopen('post.txt', 'w+');
fclose($monfichier);

?>