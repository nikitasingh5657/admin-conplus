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
            <h1>User List</h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
                <form class="form-horizontal" method="post" action="insert_user.php">
              <div class="box-body">
		
	
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="name" name="name" required>
                  </div>
                </div>
             
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">password</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="password" name="password" required>
                  </div>
                </div>
</div>    
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Color</label>
                  <div class="col-sm-10">
                    <select class="form-control select2"    name="color" id="Color" required >
                    <option value="red">red</option>
                    <option value="orange">orange</option>
                    <option value="yellow">yellow</option>
                    <option value="green">green</option>
                    <option value="blue">blue</option>
                     <option value="indigo">indigo</option>
                     <option value="violet">violet</option>
                     <option value="purple">purple</option>
                      <option value="pink">pink</option>
                      <option value="brown">brown</option>
                      <option value="grey">grey</option>
                      <option value="black">black</option>
                     
                </select>
                  </div>
                </div>
				
                  
                  
              
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" value="Add_To_Cart" class="btn btn-info pull-right">Add User</button>
              </div>
              <!-- /.box-footer -->
            </form>
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">User List</h3>
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
				
				
				$res = mysqli_query($conn,"select * from login ");
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
          
					<td>	<a href="update_user.php?id=<?php echo $row->id ?>" ><div  class="btn btn-success">update</div></a>
          <a href="delete_user.php?id=<?php echo $row->id ?>" ><div  class="btn btn-danger">Delete</div></a>
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
