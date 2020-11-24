<!DOCTYPE html>
<?php
include '../connect.php';
include 'comman_functions.php';
if(isset($_GET['val'])){
  $user_id=$_GET['id'];
  $newRow=mysqli_fetch_assoc(mysqli_query($conn, "select * from realestate where is_del = 'no' and id ='$user_id' "));
}	
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
       
          <form class="form-horizontal" method="post" action="save_realestate.php" enctype="multipart/form-data">
								<input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
          
              <div class="box-body">
		       <div class="col-md-1"></div>
            <div class="col-md-10">
            
            	<h2>Real Estate:- <?php echo $serName; ?></h2>

              <div class="form-group">
                        <label>Heading</label>
                        <input type="text" class="form-control" placeholder="Enter Heading" name ="heading" value="<?php if($newRow) {  echo $newRow['heading']; } ?>">
                      </div> 
              <div class="form-group">
                    <label for="serImage">Image</label>
                    <img src="<?php echo $newRow['reimage']; ?>" alt="" width="200px">
                    <input type="hidden" class="form-control" name="oldimg" value="<?php if($newRow) {  echo $newRow['reimage']; } ?>">

                    <div class="input-group">
                     
                        <input type="file" name="rimage" id="rimage" multiple>
                     
                      </div>
                      
                    </div>
                  </div>
               
            <div class="form-group">
                  <label for="inputEmail3" rows="4" class="col-sm-2 control-label">Description</label>

                  <textarea class="textarea" placeholder="main_label" name="description" required
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php if($newRow) {  echo $newRow['content']; } ?></textarea>
                </div>
               
                
              
                </div>
				
              <!-- /.box-body -->
              <div class="box-footer">
                
              <div class="form-group">
									<label class="control-label col-lg-3"></label>
									<div class="col-lg-3">
									</i><input type="submit" name="add" id="add"  <?php if(isset($_GET['val'])){ echo 'style=display:none;'; } ?> class="btn btn-primary" value="Submit"> 
									
									<input type="submit" name="update" id="update"  <?php if(!isset($_GET['val'])){ echo 'style=display:none;'; } ?> class="btn btn-primary" value="Update">
								</div>
              </div>
              </div>
              <!-- /.box-footer -->
            </form>
        
    
					
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
