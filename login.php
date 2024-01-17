<!-- Unset the session to log out the user -->
<!-- Important to do otherwise errors will occur with 2 users logged in -->
<?php session_unset() ?>

<?php $title = 'Login Page'; require __DIR__ . "/inc/header.php"; ?>

<?php require __DIR__ . "/components/login-form.php"; ?>

<?php require __DIR__ . "/inc/footer.php"; ?>