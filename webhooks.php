<?php

$monfichier = fopen('post.txt', 'r+');

fputs($monfichier, json_encode($_POST));
fclose($monfichier);

?>

<form method="get">

  <button type="submit" formaction="./efface.php"> EFFACE </button>
</form>