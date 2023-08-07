
<?php
include 'header.php';
?>
<?php
if(!$_SESSION['name']){
    echo "<script>window.location.assign('login.php')</script>";
}
?>

<?php
  include "./config.php";
  if(isset($_POST['btnsub'])){

    $hidden = $_POST['hid'];
    $book_name = $_POST['bookname'];
    $book_cat = $_POST['bookcat'];
    $book_author = $_POST['bookauthor'];
    $book_prize = $_POST['bookprize'];
    $bookimg = $_FILES['bookimage']['name'];
    $bookpicturetmp2 = $_FILES['bookimage']['tmp_name'];
    $upload = 'folder/' . $bookimg;
    $book_desc = $_POST['bookdesc'];
    
    $query = "UPDATE book_table SET book_name='$book_name', book_cat='$book_cat', book_author='$book_author', book_prize='$book_prize', book_img='$bookimg', book_desc='$book_desc' WHERE id = '$hidden'";
    $result = mysqli_query($con, $query);
    if(move_uploaded_file($bookpicturetmp2, $upload)){
      $msg = 'Book Data is inserted';
    }
    
  }

  ?>

  
<?php
$gid = $_GET['id'];
// include './config.php';
$query = "SELECT * FROM book_table WHERE id = '$gid'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result);
$bname = $data['book_name'];
$bcat = $data['book_cat'];
$bauthor = $data['book_author'];
$bprize = $data['book_prize'];
$bimg = $data['book_img'];
$bdesc = $data['book_desc'];


?>

  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row">
                   <div class="col-lg-4 text-center">
                    <h1>Add Books</h1>
                    
                   </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-4">
                    <?php
if(isset($msg)){

  ?>
  <div class="alert alert-dismissible alert-success mt-2">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong><?php echo $msg ?></strong><a href="#" class="alert-link"></a>.
  </div>
  <?php } ?>
                    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Book Name</label>
      <input type="text" name="bookname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Name" value="<?php echo $bname ?>">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Book Category</label>
      <input type="text" name="bookcat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Category" value="<?php echo $bcat ?>">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Book Author</label>
      <input type="text" name="bookauthor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Author" value="<?php echo $bauthor ?>">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Book Prize</label>
      <input type="text" name="bookprize" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Prize" value="<?php echo $bprize ?>">
    </div>
    <input type="hidden" name="hid" value="<?php echo $gid ?>">
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Book Image</label>
      <input type="file" name="bookimage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Image" accept="image/*">
    </div>
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Book Description</label>
      <textarea class="form-control" name="bookdesc" id="exampleTextarea" value="<?php echo $bdesc ?>" rows="3"></textarea>
    </div>
    <button type="submit" name="btnsub" value="Submit" class="btn btn-primary mt-4">Submit</button>
    </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->



    
    

<?php
include 'footer.php';
?>