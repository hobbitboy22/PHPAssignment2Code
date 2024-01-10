<?php 
    require_once 'inc/functions.php';
    require __DIR__ . "/inc/header.php";

    // Redirects the user to the login page if they are not logged in
    if (!isset($_SESSION['user']))
    {
        redirect('login', ["error" => "You need to be logged in to view this page"]);
    }

    $title = 'Member Page'; 
?>

<!-- Displays the users name when they are logged in -->
<h1>Welcome <?= $_SESSION['user']['firstname'] ?? 'Member' ?>!</h1>

<?php

// $controllers->members()->get_role();

?>

<?php require __DIR__ . "/inc/footer.php"; ?>