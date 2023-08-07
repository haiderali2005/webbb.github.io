
<?php
include 'header.php';
?>
<?php
if(isset($_SESSION['role'])){
  if($_SESSION['role'] == 1){
    echo "<script>window.location.assign('view.php')</script>";
  }
}
?>
<?php
  include "./config.php";
  if(isset($_POST['btnsub'])){

    $bookn = $_POST['bookname'];
    $bookc = $_POST['bookcat'];
    $booka = $_POST['bookauthor'];
    $bookp = $_POST['bookprize'];

    $booki = $_FILES['bookimage']['name'];
    $bookpicturetmp = $_FILES['bookimage']['tmp_name'];
    $upload = 'folder/' . $booki;
    
    $bookd = $_POST['bookdesc'];
    
    $query = "INSERT INTO book_table (book_name, book_cat, book_author, book_prize, book_img, book_desc)VALUES('$bookn', '$bookc', '$booka', '$bookp', '$booki', '$bookd')";
    $result = mysqli_query($con, $query);
    if(move_uploaded_file($bookpicturetmp, $upload)){
      $msg = 'Book Data is inserted';
    }
   
  }

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
      <input type="text" name="bookname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Name">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Book Category</label>
      <input type="text" name="bookcat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Category">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Book Author</label>
      <input type="text" name="bookauthor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Author">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Book Prize</label>
      <input type="text" name="bookprize" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Prize">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Book Image</label>
      <input type="file" name="bookimage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Image" accept="image/*">
    </div>
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Book Description</label>
      <textarea class="form-control" name="bookdesc" id="exampleTextarea" rows="3"></textarea>
    </div>
    <button type="submit" name="btnsub" class="btn btn-primary mt-4">Submit</button>
    </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->



    
    

<?php
include 'footer.php';
?>