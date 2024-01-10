<?php require_once 'inc/functions.php'; ?>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $action = $_POST['action'];
    if ($action == "equipment"){
        // Gets the id of the equipment
        $name = $_POST['name'];
        $buyprice = $_POST['buy_price'];
        $sellprice = $_POST['sell_price'];
        $description = $_POST['description'];
        $stock = $_POST['stock'];
        $image = $_FILES['image'];

        $imagename = $image['name'];
        // Temporary image name
        $imagetempname = $image['tmp_name'];
        // Removes the file extension from the uploaded image
        $fileExt = explode('.', $imagename);
        // Changes the string to lowercase
        $extension = strtolower(end($fileExt));
        // Createsa uniqueid for the file
        $newfile = uniqid('', TRUE).'.'.$extension;
        // Sets the destination of the file
        $filedestination = 'images/'.$newfile;
        // Moves the file to the given location
        move_uploaded_file($imagetempname, $filedestination);
        $args = array(
            'name'=>$name,
            'description'=>$description,
            'image'=>$filedestination,
            'stock'=>$stock,
            'buy_price'=>$buyprice,
            'sell_price'=>$sellprice,

        );
        // Creates the equipment
        $controllers->equipment()->create_equipment($args);
        // Returns the user back to the inventory page
        header('Location: Inventory.php');
    }
elseif ($action == "user"){
    $id = $_POST['id'];
    // Returns the user back to the users page
    header('Location: Users.php');
    }
    
}
?>