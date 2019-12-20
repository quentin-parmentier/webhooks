<?php

$monfichier = fopen('post.txt', 'r+');

fputs($monfichier, "                          ");
fclose($monfichier);

?>