<!DOCTYPE html>
<html>
<head>
    <title>Import Excel CodeIgniter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-8 offset-2">
            <?php echo $this->session->flashdata('notif') ?>
            <form method="POST" action="<?php echo base_url('admin/upload') ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputEmail1">UNGGAH FILE EXCEL</label>
                <input type="file" name="userfile" class="form-control">
              </div>

              <button type="submit" class="btn btn-success">UPLOAD</button>
            </form>
            <br>
            <button style="margin-top: 5%;" class="btn btn-success" onclick="location.href='<?php echo base_url('admin/aplikasilist')?>'">LIST DATA EKONOMI</button>
        </div>
    </div>
</div>
</body>
</html>