<?php $page = 'notes'; require 'homeheader.php';?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
  <title>Leafnote | Add Notes</title>
  <link rel="stylesheet" type="text/css" href="styles.css" >
  <link rel="stylesheet" href="Bootstrap/custom.css" >
  <link rel="stylesheet" href="Bootstrap/custom-styles.css" >
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

  <div class="page-header mt-3 ml-3">
    <h3>Create a note</h3>
  </div>

  <div class="row-justify-content-center mt-5">
    <div class="col-lg-6 m-auto">
      <div class="card text-center m-auto shadow p-3 mb-5 bg-white rounded">
        <!-- <h5 class="card-header">Add Notes</h5> -->
          <div class="card-body">
            <form action="process.php" method="POST">
              <div class="form-group row">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="col-sm-6">
                <input id="note_date" name="note_date" width="275" />
                    <script>
                      $('#note_date').datepicker({uiLibrary: 'bootstrap4', format: 'yyyy-mm-dd'});
                    </script>
                </div>

                <div class="col-sm-6">
                  <textarea class="form-control" name="note_text" rows="3" placeholder="Write something here.."></textarea>
                </div>

                <div class="col-sm-6 col-form-label mt-2">
                  <button type="submit" class="btn note-btn" style=" background-color: #93DB70;" name="addnotes">SAVE</button>
                  <button type="submit" class="btn note-btn btn-danger" name="cancel">CANCEL</button>
                </div>

              </div>
            </form>
          </div>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-lg-6 m-auto">
      
    </div>
  </div>
</body>
</html>