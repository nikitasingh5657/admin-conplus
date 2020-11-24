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
            <h1>User Update</h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
        <?php 
				
				$res = mysqli_query($conn,"select * from login where id='".$_GET['id']."'");
				while($row=$res->fetch_object())
				{
					
				
					$username = $row->username;
						$password = $row->password;
					$user_color = $row->user_color;
					
					?>
                <form class="form-horizontal" method="post" action="update_user_insert.php">
              <div class="box-body">
		
              <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
	
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $username ?>" id="inputEmail3" placeholder="name" name="name" required>
                  </div>
                </div>
             
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">password</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" value="<?php echo $password ?>" placeholder="password" name="password" required>
                  </div>
                </div>
</div>    
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Color</label>
                  <div class="col-sm-10">
                    <select class="form-control select2"  value="<?php echo $color ?>"  name="color" id="Color" required >
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
                
                <button type="submit" value="Add_To_Cart" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
                <?php }
                ?>		
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
