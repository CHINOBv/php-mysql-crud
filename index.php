<?php include("db.php") ?>
<?php include("./includes/header.php") ?>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card card-body">
        <form action="">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Task Titel" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
          </div>
          <input type="submit" value="Create Task">
        </form>
      </div>
    </div>
    <div class="col-md-8">

    </div>
  </div>
</div>
<?php include("./includes/footer.php") ?>