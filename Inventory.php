<?php $title = 'Login Page'; require __DIR__ . "/inc/header.php";
require 'inc/functions.php';

// Get the POST data from the form
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $action = $_POST['action'];
  $id = $_POST['id'];
  if ($action == "edit"){
    $currentItem = $controllers->equipment()->get_equipment_by_id($id);
    ?>
    <script>
        $(document).ready(function(){
            $("#edititemmodal").modal("show");
        });
    </script>
    <?php
  }

}
// Require the inventory component after the main php code
// For the parts of the code to work correctly it must come after the code as the inventory page requires the code above to be executed first
require __DIR__ . "/components/inventory.php";

require __DIR__ . "/inc/footer.php"; ?>