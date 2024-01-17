<?php require_once './inc/functions.php'; ?>

<?php 
// Get all members and store in a variable
$users = $controllers->members()->get_all_members();
?>

<div class="container mt-4">
    <h2>User Management</h2> 
    <table class="table table-striped"> 
            <tr>
                <th>User Id</th> 
                <th>First name</th> 
                <th>Last name</th>
                <th>Email</th>
                <?php if($_SESSION){ //Checks if the user is logged in to remove any error messages from the inventory page
                      if($_SESSION['user']['role'] == 'admin'){?>
                      <th>Manage</th> <?php
                    }} ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?> <!-- Loop through each equipment item -->
                <tr>
                    <td><?= htmlspecialchars($user['ID']) ?></td> 
                    <td><?= htmlspecialchars($user['firstname']) ?></td>
                    <td><?= htmlspecialchars($user['lastname']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <?php if($_SESSION){ //Checks if the user is logged in to remove any error messages from the inventory page
                      if($_SESSION['user']['role'] == 'admin'){ ?>
                        <td>
                        
                          <form action = "./delete.php" method = "post">
                            <input type = "hidden" name = "id" value = "<?= $user['ID']?>">
                            <input type = "hidden" name = "action" value = "user">
                          
                            <button type = 'submit' class = 'btn btn-danger' style = "float: right;">Delete</button>
                          </form>
                        </td> <?php
                    }} ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="modal" tabindex="-1" role="dialog" id = "editusersmodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit User information</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action = "./edit.php" method = "post" enctype = "multipart/form-data">
          <div class = "form-group">
            <label class="form-label">First Name</label>
            <input type="text" name="name" class="form-control" value = '<?= $currentItem['name']; ?>' required>
          </div>
          <div class = "form-group">
            <label class="form-label">Last Name</label>
            <input type="text" name="description" class="form-control" value = '<?= $currentItem['description'] ?>' required>
          </div>
          <div class = "form-group" style="width: 150px;">
            <label class="form-label">Email</label>
            <input type="number" min=0 name="stock" class="form-control" value = <?= $currentItem['stock'] ?> required>
          </div>
          <div class="modal-footer">
          <input type = "hidden" name = "action" value = "equipment">
          <input type = "hidden" name = "id" value = "<?= $currentItem['id']?>">
          <button type="submit" class="btn btn-primary">Confirm</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>