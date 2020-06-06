<?php 
  include("db.php");

  if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    //Query para escribir en la DB, en tabla({campo1, campo2}) VALUES('$Variable del campo 1', "$Variable del campo 2") a guardar
    $query = "INSERT INTO task(title,description) VALUES ('$title', '$description')";
    
    $res = mysqli_query($con, $query);

    if (!$res) {
      die("Error on Query");
    }
    $_SESSION["message"] = "Task Saved";
    $_SESSION["message_type"] = "success";
    
    header("location: index.php");
  }

?>