<?php
$dataid = $_GET['id'];

include './config.php';
$query = "DELETE FROM book_table WHERE id = '$dataid'";
$result = mysqli_query($con, $query);
header('location:viewbook.php');

?>
<?php
if(isset($_SESSION['role'])){
  if($_SESSION['role'] == 1){
    echo "<script>window.location.assign('view.php')</script>";
  }
}


?>