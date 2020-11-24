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
            <h1>Services</h1>
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
			
				$res = mysqli_query($conn,"select * from services where id='".$_GET['id']."'");
				while($row=$res->fetch_object())
				{
					
				
          $serName = $row->serviceName;
          $serData = $row->serviceData;
          $serImage = $row->serviceImage;
          $contact_person = $row->contact_person;
          $position=$row->position;
          $contact_email = $row->contact_email;
          $contact_no = $row->contact_no;
					
					?>
          <form class="form-horizontal" method="post" action="save_service.php" enctype="multipart/form-data">
              <div class="box-body">
		       <div class="col-md-1"></div>
            <div class="col-md-10">
              <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		          <!-- <input type="hidden" name="old" value="<?php echo $serviceImage; ?>"> -->
            	<h2>Service:- <?php echo $serName; ?></h2>
              
              <div class="form-group">
                    <label for="serImage">Contact Image</label>
                    <img src="<?php echo $serImage; ?>" alt="" width="200px">
                    <div class="input-group">
                     
                        <input type="file" name="serImage" id="serImage">
                        <!-- <label class="custom-file-label" for="serImage">Choose file</label> -->
                      </div>
                      
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Contact Person</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $contact_person ?>" id="inputEmail3" placeholder="Name" name="contact_person" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Positon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $position ?>" id="inputEmail3" placeholder="Position" name="position" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Contact Email</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $contact_email ?>" id="inputEmail3" placeholder="Email" name="contact_email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Contact No</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $contact_no ?>" id="inputEmail3" placeholder="name" name="contact_no" required>
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
