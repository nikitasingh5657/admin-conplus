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
            <h1>Property Page </h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <h5>Add New Section</h5>
        <div class="card card-default">
        <form class="form-horizontal" method="post" action="home_section_insert.php">
              <div class="box-body">
		           
              
            <div class="form-group">
                  <label for="inputEmail3" rows="4" class="col-sm-2 control-label"> English content</label>
                  <div class="col-sm-10">
                  <textarea class="textarea" placeholder="main_label" name="main_label" required
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                </div>
               
                <div class="form-group">
                  <label for="inputEmail3" rows="4" class="col-sm-2 control-label"> german content</label>

                  <div class="col-sm-10">
                  <textarea class="textarea" placeholder="main_label_german" name="main_label_german" required
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                </div>
               
    
                </div>
				
                  
                  
              
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit"  class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
                     <!-- /.box -->
                     <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">DataTable with default features</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
				  
				   
				    <th>Main Content</th>
            <th>Main Content german</th>
            <th>Action</th>
            <!-- <th>Sub Content</th>
            <th>Sub Content german</th> -->
				  <!-- <th>Email</th>
				   <th>Telephone</th>
           
           <th>Upload Image</th>
           <th>Image view</th> -->
          
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
				
				
				$res = mysqli_query($conn,"select * from property_info ");
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
					<tr>
					<td><?php echo $count; ?></td>
          <td><?php echo $main_label; ?></td>
          <td><?php echo $main_label_german; ?></td>
          <!-- <td><?php echo $sub_label; ?></td>
          <td><?php echo $sub_label_german; ?></td> -->
          <!-- <td><?php echo $email; ?></td>
          <td><?php echo $telephone; ?></td>
				
          <td><form action="upload_photo.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $row->id ?>" id="id">
      <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit"  value="Upload Image" name="submit">
</form>
</td>
<td><img src="<?php echo $image ?>" width="100px" height="100px"></td> -->
					<!-- <td><?php echo $image; ?></td> -->
          
					<td>	<a href="update_home.php?id=<?php echo $row->id ?>" ><div  class="btn btn-success">Update</div></a>
         	<a href="update_home.php?id=<?php echo $row->id ?>" ><div  class="btn btn-danger">Delete</div></a>
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
              <!-- /.card-body -->
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
