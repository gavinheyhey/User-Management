<?php 
require '../../includes/conn.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE  | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  
  <?php require '../../includes/links.php' ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php require '../../includes/navbar.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php require '../../includes/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    

    
    <section class="content">
      <div class="container-fluid">
       
        <div class="row">
          
         
        </div>
    

        <div class="row justify-content-center">
          <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h5 class="card-title">List role</h5>
              </div>
              
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>role</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_user = mysqli_query($conn, "SELECT * FROM tbl_roles");
                        while($row = mysqli_fetch_array($select_user)) {
                        ?>
                        <tr>
                            <td><?php echo $row['role'];?></td>
                           
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                  </table>

                </div>

                <div class="card-footer">
                  
                </div>


            </div>
          </div>     
        </div>

      </div>

    </section>
    
  </div>
  
  
  <?php require '../../includes/footer.php' ?>

  
  <aside class="control-sidebar control-sidebar-dark">
 
  </aside>
  
</div>


<?php require '../../includes/scripts.php' ?>

</body>
</html>