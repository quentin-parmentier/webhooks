<?php

// $monfichier = fopen('post.txt', 'r+');

//$post_data = file_get_contents('php://input');

//fputs($monfichier, json_encode($_SERVER));
// fputs($monfichier, $post_data);
// fclose($monfichier);



// If the request is a POST request then we're getting a real webhook callback.
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Default to not verified state.
    $isVerified = FALSE;
    // Get the signature from the headers
    $sig = $_SERVER['HTTP_X_HUB_SIGNATURE'];
    // Only test if there's possibly a signature
    if(!empty($sig)) {
        // Read the raw POST data
        $data = file_get_contents("php://input");
        // Calculate a hash and prepend the algorithm to match the signature
        $hash = 'sha1=' . hash_hmac('sha1', $data, 'PipiCaca');
        // Compare the calculated and signature hash strings
        $isVerified = $hash === $sig;
    }
    
    $monfichier = fopen('post.txt', 'r+');
    $retour = $isVerified.' : '.$hash.' : '.$sig;
    fputs($monfichier, $retour);
    fclose($monfichier);

}

?>
<form method="get">

  <button type="submit" formaction="./efface.php"> EFFACE </button>
</form>