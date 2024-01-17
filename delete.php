<?php require_once 'inc/functions.php'; ?>

<?php 
// Gets the POST data from the form
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $action = $_POST['action'];
    if ($action == "equipment"){
        // Gets the id of the equipment
        $id = $_POST['id'];
        // Deletes the equipment by id
        $controllers->equipment()->delete_equipment($id);
        // Returns the user back to the inventory page
        header('Location: Inventory.php');
    }elseif ($action == "user"){
        $id = $_POST['id'];
        // Deletes the member by their id
        $controllers->members()->delete_member((int)$id);
        // Returns the user back to the users page
        header('Location: Users.php');
    }
    
}
?>