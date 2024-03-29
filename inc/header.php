<?php

// if (session_status() != PHP_SESSION_ACTIVE){
//   session_start();
// }

session_start();

// Checks if the user is logged in
if (isset($_SESSION['user'])){
  $logged_in = TRUE;
}
else{
  $logged_in = FALSE;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">GourmetGrocer</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <!-- Changes where the home screen takes user if they are logged in -->
        <a class="nav-link" href="<?php echo $logged_in ? './member.php' : './index.php'; ?>">
          <?php echo $logged_in ? 'Home' : 'Home'; ?>
        </a>
      </li>
      <!-- Changes what is displayed depending on if the user is logged in -->
      <?php if ($logged_in){ ?>
        <li class="nav-item">
          <a class="nav-link" href="./Inventory.php">Equipment</a>
        </li>
      <?php } ?>
      <?php if($logged_in){
        // Only displayes if the user is an admin and logged in
        if ($_SESSION['user']['role'] == 'admin'){ ?>
          <a class = 'nav-link' href = './Users.php'>Manage Users</a>
        <?php }
      } ?>
      
      
      <li class="nav-item">
        <a class="nav-link" href="./login.php">Login</a>
      </li>
    </ul>
  </div>
</nav>








    </body>


</html>