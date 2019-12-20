<?php

$monfichier = fopen('post.txt', 'r+');

fputs($monfichier, "ça marchre");
fclose($monfichier);

?>

<form method="get">

  <button type="submit" formaction="./efface.php"> EFFACE </button>
</form>