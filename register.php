
<?php
include 'header.php';
?>

<?php
  include "./config.php";
  if(isset($_POST['buttonsub'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    
    $query = "INSERT INTO book_register (username, email, pass)  VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($con, $query);
    $msg = 'New User is inserted';
  }

  ?>

  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row">
                   <div class="col-lg-4 text-center">
                    <h1>Register</h1>
                    
                   </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-4">
                    <?php
if(isset($msg)){

  ?>
  <div class="alert alert-dismissible alert-success mt-2">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong><?php echo $msg ?></strong><a href="#" class="alert-link"></a>
  </div>
  <?php } ?>
                    <form action="" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">User Name</label>
      <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
      <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Password</label>
      <input type="text" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
    </div>
    <div class="form-group mt-4">
                <input type="submit" value="Submit" class="btn btn-info w-100 mt-2" name="buttonsub">
            </div>
    </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->



    
    

<?php
include 'footer.php';
?>