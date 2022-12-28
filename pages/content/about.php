<?php require_once('../../config.php');
if(!$_SESSION['u_id'])
header('location:../');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">The Computer Students Society<h3>
		  <img height="100" src="\content\images.doc_07b8acee9d3173ad527448d425d611a8.png">
        </div>
        <div class="card-body">
		<?php
          $sql = "SELECT * FROM announcement";
		  $result = $conn->query($sql);
		  
		  if ($result->num_rows > 0) {?>
		  
		  <table border="1" width="80%">
		<tr>
		 <td>Captions</td>
		 <td>Images</td>
		</tr>
	<?php $k = 1;
	while($row = $result->fetch_assoc()) { ?>
		<tr>
		 <td><?php echo $k++;?></td>
		 <td><?php echo $row['caption'];?></td>
		 <td><img height="100" src="<?php echo $row['image'];?>"></td>
		</tr>
		
		<?php }
	
	echo "<table/>";
	
	}
?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>