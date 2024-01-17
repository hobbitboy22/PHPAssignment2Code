<?php
    
    foreach(glob('./classes/*.php') as $file)
    {
        require_once $file; ///Include all PHP classes
    }

    $controllers = new Controllers(); //Instantiate controllers

    // Function to redirect the user to another page
    function redirect($page, array $params = [])
    {
        $qs = $params ? '?' . http_build_query($params) : '';
        header("Location:$page.php" . $qs);
        exit;
    }

?>