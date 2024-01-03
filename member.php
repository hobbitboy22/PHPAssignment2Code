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

<?php

$controllers->members()->get_role();

if (isset($_SESSION['user']['role'])){
    echo ($_SESSION['user']['role']);
}
else{
    echo ("ahhh");
}

?>

<?php require __DIR__ . "/inc/footer.php"; ?>