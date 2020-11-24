<!DOCTYPE html>
<?php
include '../connect.php';
include 'comman_functions.php';
?>
<html>
<?php
    head(); 
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php
    navbar(); 
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
    main_sidebar(); 
?>

  <!-- Content Wrapper. Contains page content -->

   
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Deleted User List</h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
              <div class="box">
            <div class="box-header">
            
			  <!--<a href="add_product.php"><button type="submit" class="btn btn-info">Add Product</button></a>-->
            </div>
			
            <!-- /.box-header -->
            <div class="box-body">
			
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
				  
				   
				    <th>Name</th>
            <th>Password</th>
				  <th>Color</th>
				   <th>Action</th>
                
                </tr>
                </thead>
                <tbody>
                <?php 
				$count=1;
				
				/* $res1 = mysqli_query($conn,"select * from bus_no where is_del='no'");
				while($r1=$res1->fetch_object())
				{
				$unique_id = $r1->unique_id;
				//$route_unique_id = $r1->route_unique_id;
				$bus_no=$r1->bus_no;
				$id = $r1->id; */
				
				//$count=1;
				
				
				$res = mysqli_query($conn,"select * from login where is_del='yes'");
				while($row=$res->fetch_object())
				{
					
				
					$username = $row->username;
						$password = $row->password;
					$user_color = $row->user_color;
					
					?>
					<tr>
					<td><?php echo $count; ?></td>
				
          <td><?php echo $username; ?></td>
					<td><?php echo $password; ?></td>
				
					<td><?php echo $user_color; ?></td>
          
					<td>	<a href="restore_items.php?id=<?php echo $row->id ?>&section=user" ><div  class="btn btn-success">Restore</div></a>
         	</td>
					
				 
					</tr>
					<?php
					$count++;
					//}
					
				   }
				
					?>
                </tbody>
                
              </table>
			  
            </div>
			   
					
            <!-- /.box-body -->

          <!-- /.card-header -->
          
          <!-- /.card-body -->
         
        <!-- /.card -->

        <!-- SELECT2 EXAMPLE -->
      
        <!-- /.card -->

      
        <!-- /.card -->

      
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php 
all_js();
?>
</body>
</html>
