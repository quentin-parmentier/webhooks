<?php

unlink("post.txt");
$monfichier = fopen('post.txt', 'r+');
fclose($monfichier);

?>