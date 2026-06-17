<?php 
include '../user.php';
include '../database.php';

$db = new Database();
$conn = $db->Connect();
$user = new User($conn);

$result = $user->getAllUser();
$daftar_users =$result->fetch_all(MYSQLI_ASSOC);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-d-4">
          <h1 class="mt-4"> Daftar User</h1>
          <hr />
          <a href="index.php?halaman=tambah_user_form.php" class="btn btn-primary mb-3">Tambah User</a>
          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Asal</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($daftar_users as $user){
                  ?>
                  <tr>
                  <td><?php echo $user['Id']; ?></td>
                  <td><?php echo $user['username']; ?></td>
                  <td><?php echo $user['email']; ?></td>
                  <td><?php echo $user['asal']; ?></td>
                  <td>
                  <a href ="delete_user.php?id=<?php echo $user['Id']; ?>"> delete </a> | edit
                  </td>
                </tr>
                 <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </main>