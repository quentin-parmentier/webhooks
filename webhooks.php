<?php

$monfichier = fopen('post.txt', 'r+');

$post_data = file_get_contents('php://input');

//fputs($monfichier, json_encode($_SERVER));
fputs($monfichier, $post_data);
fclose($monfichier);

?>

<form method="get">

  <button type="submit" formaction="./efface.php"> EFFACE </button>
</form>