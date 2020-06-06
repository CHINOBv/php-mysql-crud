<?php 
  include("db.php");
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    $res_delete = mysqli_query($con, $query);

    if(!$res_delete){
      die("Query Filed");
    }

    $_SESSION['message'] = "Task Removed";
    $_SESSION['message_type'] = "danger";

    header("Location: index.php");
  }
?>