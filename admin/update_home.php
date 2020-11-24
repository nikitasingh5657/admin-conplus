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
        <?php 
				$count=1;
			
				$res = mysqli_query($conn,"select * from property_info where id='".$_GET['id']."'");
				while($row=$res->fetch_object())
				{
            $main_label = $row->main_label;
            $main_label_german = $row->main_label_german;
            $sub_label_german = $row->sub_label_german;
						$sub_label = $row->sub_label;
          $email = $row->email;
          $telephone = $row->telephone;
          $image = $row->image;
					
					?>
          <form class="form-horizontal" method="post" action="update_home_insert.php">
              <div class="box-body">
		          <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
	
                <!-- <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Main Label</label>

                  <div class="col-sm-10">
                    <textarea type="textarea" rows="4" class="form-control"   id="inputEmail3" placeholder="main_label" name="main_label" required><?php echo $main_label; ?></textarea>
                  </div>
                </div> -->
              
            <div class="form-group">
                  <label for="inputEmail3" rows="4" class="col-sm-2 control-label"> English content</label>

                  <textarea class="textarea" placeholder="main_label" name="main_label" required
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $main_label; ?></textarea>
                </div>
               
                <div class="form-group">
                  <label for="inputEmail3" rows="4" class="col-sm-2 control-label"> german content</label>

                  <div class="col-sm-10">
                  <textarea class="textarea" placeholder="main_label_german" name="main_label_german" required
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $main_label; ?></textarea>
                    </div>
                </div>
               

		
            
               
                </div>
				
                  
                  
              
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" value="Add_To_Cart" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
        <?php } ?>
    
					
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
