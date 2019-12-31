<?php

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
    
    if($isVerified){
      exec("git clone https://seokuymi:Pcw1234.@github.com/seokuymi/webhooks.git");
    }

}

?>
<form method="get">

  <button type="submit" formaction="./efface.php"> EFFACE </button>
</form>