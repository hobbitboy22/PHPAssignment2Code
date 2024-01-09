<?php
// Include the functions file for necessary functions and classes
require_once './inc/functions.php';

// Retrieve all equipment data using the equipment controller
$equipment = $controllers->equipment()->get_all_equipments();
?>

<!-- HTML for displaying the equipment inventory -->
<div class="container mt-4">
    <button type = "button" class = "btn btn-primary" data-bs-toggle = "modal" data-bs-target = "#examplemodal">Add Equipment</button>
    <h2>Equipment Inventory</h2> 
    <table class="table table-striped"> 
            <tr>
                <th>Image</th> 
                <th>Name</th> 
                <th>Description</th>
                <th>Stock</th>
                <th>Buy Price</th>
                <th>Sell Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipment as $equip): ?> <!-- Loop through each equipment item -->
                <tr>
                    <td>
                        <img src="<?= htmlspecialchars($equip['image']) ?>"
                             alt="Image of <?= htmlspecialchars($equip['description']) ?>" 
                             style="width: 100px; height: auto;"> 
                    </td>
                    <td><?= htmlspecialchars($equip['name']) ?></td> 
                    <td><?= htmlspecialchars($equip['description']) ?></td>
                    <td><?= htmlspecialchars($equip['stock']) ?></td>
                    <td><?= htmlspecialchars($equip['buy_price']) ?></td>
                    <td><?= htmlspecialchars($equip['sell_price']) ?></td>
                    <?php if($_SESSION){ //Checks if the user is logged in to remove any error messages from the inventory page
                      if($_SESSION['user']['role'] == 'admin'){?>
                        <td><button type = 'button' class = 'btn btn-warning' data-bs-toggle = 'modal' data-bs-target = '#examplemodal'>Edit</button></td>
                        <td><button type = 'button' class = 'btn btn-danger' data-bs-toggle = 'modal' data-bs-target = '#examplemodal'>Delete</button></td> <?php
                    }} ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<div class="modal" tabindex="-1" role="dialog" id = "examplemodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>HE HE HE HA</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>