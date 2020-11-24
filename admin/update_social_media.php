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
            <h1>Social Media</h1>
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
			
				$res = mysqli_query($conn,"select * from social_media where id='".$_GET['id']."'");
				while($row=$res->fetch_object())
				{
					
				
          $name = $row->name;
          $link = $row->link;
         
					
					?>
          <form class="form-horizontal" method="post" action="save_social_media.php" enctype="multipart/form-data">
              <div class="box-body">
		       <div class="col-md-1"></div>
            <div class="col-md-10">
              <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		          <!-- <input type="hidden" name="old" value="<?php echo $serviceImage; ?>"> -->
            
             
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $name ?>" id="inputEmail3" placeholder="Name" name="name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Link</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $link ?>" id="inputEmail3" placeholder="Link" name="link" required>
                  </div>
                </div>
               
            <!-- <div class="form-group">
                  <label for="inputEmail3" rows="4" class="col-sm-2 control-label">Contact Details</label>

                  <textarea class="textarea" placeholder="main_label" name="serData" required
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $serData ; ?></textarea>
                </div>
                -->
                
              
                </div>
				
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" value="Add_To_Cart" class="btn btn-info pull-right">Submit</button>
              </div>
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
