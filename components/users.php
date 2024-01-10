<?php require_once './inc/functions.php'; ?>

<?php 
$users = $controllers->members()->get_all_members();
?>

<div class="container mt-4">
    <button type = "button" class = "btn btn-primary" data-bs-toggle = "modal" data-bs-target = "#examplemodal">Add Equipment</button>
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
                        <td><button type = 'button' class = 'btn btn-warning' data-bs-toggle = 'modal' data-bs-target = '#examplemodal' style = "float: left; margin-right: 15px;">Edit</button>
                        
                          <form action = "./delete.php" method = "post">
                            <input type = "hidden" name = "id" value = "<?= $user['ID']?>">
                            <input type = "hidden" name = "action" value = "user">
                          
                            <button type = 'submit' class = 'btn btn-danger' style = "foat: right;">Delete</button>
                          </form>
                        </td> <?php
                    }} ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>