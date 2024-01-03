<?php 
    require_once 'inc/functions.php';
    require __DIR__ . "/inc/header.php";

    if (!isset($_SESSION['user']))
    {
        redirect('login', ["error" => "You need to be logged in to view this page"]);
    }

    $title = 'Member Page'; 
?>

<h1>Welcome <?= $_SESSION['user']['firstname'] ?? 'Member' ?>!</h1>
<h1>Welcome <?= $_SESSION['user']['ID'] ?? 'Member' ?>!</h1>

<?php require __DIR__ . "/inc/footer.php"; ?>