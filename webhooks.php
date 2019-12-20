<?php

$monfichier = fopen('post.txt', 'r+');

fputs($monfichier, json_encode($_POST));
fclose($monfichier);

?>