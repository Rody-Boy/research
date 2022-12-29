<?php require_once('../../config.php');
if(!$_SESSION['u_id'])
header('location:../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Advanced form elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registration Form : <b>Admin</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
            <div class="col-md-12">
            <form action="../../actions/actions.php?f=register_encoder" method="POST" autocomplete="off">    
            <input type='hidden' name='id' value='<?php echo $_SESSION['u_id'];?>'>      
                </div></br>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input name="fname" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Middle Name</label>
                    <input name="mname" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Middle Name">
                  </div>
                  </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input name="lname" required type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                  </div>
                </div>
				
				<div class="col-md-2">
                  <div class="form-group">
                  <label>Position</label>
                  <select name="position" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                  <?php
                      $pos_data=$DBQuery->position();
                      while($pos_row=$pos_data->fetch_assoc()):
                        $pos=$pos_row['position'];
                        if($pos == $currentPos)
                        echo"<option selected>$pos</option>";
                        else
                        echo"<option>$pos</option>";
                      endwhile;
                    ?>
                  </select>
                </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                  <label>Profile Picture</label>
                    <input name="filename" required type="file" accept="image/png, image/gif, image/jpeg" class="form-control" id="" placeholder="">
                </div>
                </div>
				
				<div class="col-md-3">
                  <div class="form-group">
                  <label>School Issued Email Address</label>
                    <input required name="u_email" type="text" class="form-control" id="" placeholder="Enter Email Address">
                </div>
                </div>
				
				<div class="col-md-4">
                  <div class="form-group">
                  <label>Mobile Number</label>
                    <input name="u_cpnum" required type="number" class="form-control" id="" placeholder="Enter Mobile Number">
                </div>
                </div>
				
                
                <div class="col-md-6">
                  <div class="form-group">
                  <label>User Name</label>
                    <input name="uname" required type="text" class="form-control" id="" placeholder="Enter Username">
                </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                  <label>Default Password</label>
                    <input readonly value='Admin' required name="pass" type="text" class="form-control" id="" placeholder="Enter Email Address">
                </div>
                </div>
                </div>
                </div>
               
          <!-- /.card-body -->
          <div class="card-footer">
           <button class="btn btn-outline-primary">Register</button>
        </form>
          </div>
        </div>
        </div>
        <!-- /.card -->

         
        <!-- /.card -->

      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar 
  <aside class="control-sidebar control-sidebar-dark">
    
  </aside>
 /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  }
  )
  
</script>
</body>
</html>
