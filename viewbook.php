
<?php
include 'header.php';
?>

<?php
if(!$_SESSION['name']){
    echo "<script>window.location.assign('login.php')</script>";
}
?>


  <!-- Blank Start -->
  <div class="container-fluid pt-4 px-4">
                <div class="row">
                   <div class="col-lg-4 text-center">
                    <h1>View Books</h1>
                    
                   </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-4">
                    <table class="table table-hover">
  <thead>
    <tr> 
      <th scope="col">ID</th>
      <th scope="col">Book Name</th>
      <th scope="col">Book Category</th>
      <th scope="col">Book Author</th>
      <th scope="col">Book Prize</th>
      <th scope="col">Book Description</th>
      <?php 
      if($_SESSION['role'] == 0){

      
      ?>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
      <?php } ?>

    </tr>
  </thead>
  <tbody>
    <?php
    include "./config.php";
    $query = 'SELECT * FROM book_table';
    $result = mysqli_query($con, $query);
    foreach($result as $data){
    ?>
    <tr class="table-active">
      <td><?php echo $data['id'] ?></td>
      <td><?php echo $data['book_name'] ?></td>
      <td><?php echo $data['book_cat'] ?></td>
      <td><?php echo $data['book_author'] ?></td>
      <td><?php echo $data['book_prize'] ?></td>
      <td><?php echo $data['book_desc'] ?></td>
     <?php
      if($_SESSION['role'] == 0){
     
     ?>
      <td><a href="./deletebook.php?id=<?php echo $data['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
      <td><a href="./editbook.php?id=<?php echo $data['id'] ?>"><button type="button" class="btn btn-success">Edit</button></a></td>
      <?php } ?>
    </tr>

    <?php } ?>
  </tbody>
</table>
                    </div>
                </div>
            </div>
            <!-- Blank End -->



    
    

<?php
include 'footer.php';
?>