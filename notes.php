<?php $page = 'notes'; require 'homeheader.php';?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  <title>Leafnote | Add Notes</title>
  <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css  " rel="stylesheet" type="text/css" />
  </head>
<body>
<?php require_once 'process.php'; ?>

<?php
    if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>

<div class="row-justify-content-center mt-5">
  <div class="col-lg-6 m-auto">
    <div class="card border-success text-center m-auto" style="width: 45rem;">
      <h5 class="card-header">Add Notes</h5>
        <div class="card-body">
          <form action="process.php" method="POST">
            <div class="form-group row">
              <input type="hidden" name="id" value="<?php echo $id; ?>">

              <label class="col-sm-5 col-form-label mt-2">Date</label>
              <div class="col-sm-6">
              <input id="note_date" name="note_date" width="324" />
                  <script>
                    $('#note_date').datepicker({uiLibrary: 'bootstrap4', format: 'yyyy-mm-dd'});
                  </script>
              </div>

              <label class="col-sm-5 col-form-label mt-2">Notes</label>
              <div class="col-sm-6">
                <textarea class="form-control" name="note_text" rows="3"></textarea>
              </div>

              <div class="col-sm-5 col-form-label mt-2">
                <button type="submit" class="btn btn-danger" name="cancel">CANCEL</button>
                <button type="submit" class="btn btn-primary" name="addnotes">ADD</button>
              </div>

            </div>
          </form>
        </div>
    </div>
  </div>
</div>

</body>
</html>