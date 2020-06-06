<?php include("db.php") ?>
<?php include("./includes/header.php") ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <div class="card card-body">
      <?php if(isset($_SESSION["message"])){?>
        <div class="alert alert-<?=$_SESSION["message_type"];?> alert-dismissible fade show" role="alert">
          <?=$_SESSION["message"];?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php session_unset(); }?>
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Titel" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
          </div>
          <input type="submit" value="Create Task" class="btn btn-success btn-block" name="save_task">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Crated At</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = "SELECT * FROM task";
            $res_tasks = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($res_tasks)) { ?>
              <tr>
                <td><?php echo $row["title"] ?></td>
                <td><?php echo $row["description"] ?></td>
                <td><?php echo $row["crated_at"] ?></td>
                <td>
                  <a href="edit_task.php?id=<?php echo $row["id"];?>" class="btn btn-secondary p-2 m-1">
                    <i class="fas fa-marker"></i>
                  </a>
                  <a href="delete_task.php?id=<?php echo $row["id"];?>" class="btn btn-danger p-2 m-1">
                    <i class="far fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include("./includes/footer.php") ?>