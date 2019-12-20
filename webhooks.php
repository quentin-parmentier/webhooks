<?php

$monfichier = fopen('post.txt', 'r+');

fputs($monfichier, json_encode($_SERVER));
fclose($monfichier);

?>

<form method="get">

  <button type="submit" formaction="./efface.php"> EFFACE </button>
</form>