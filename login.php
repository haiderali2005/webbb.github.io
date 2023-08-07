    <?php
include './header.php';
?>

<?php
include './config.php';
if(isset($_POST['btnsub'])){
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $query = "SELECT * FROM book_register  WHERE email = '$email' and pass = '$password'";
    $result = mysqli_query($con, $query);
    $row = mysqli_num_rows($result);
    $data = mysqli_fetch_assoc($result);
    // print_r($row);
    if($row > 0){
       $_SESSION['name']=$data['username']; 
       $_SESSION['role'] = $data['role'];
        // header('location:index.php');
       echo "<script>window.location.assign('index.php')</script>";
    } else {
        echo "username and password not match";
    }
 }
?> 

<div class="px-4 pt-4">
<div class="container">
    <div class="row">
        <div class="col-lg-4 mt-4   ">
            <h1>Log In</h1>
            <div class="mt-4"></div>
            <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-info w-100 mt-2" name="btnsub">
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php
include './footer.php';
?>