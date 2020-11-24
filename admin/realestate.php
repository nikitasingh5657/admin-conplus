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
            <h1>Home Page </h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

                     <!-- /.box -->
                     <div class="card">
              <div class="card-header">
                <!-- <h3 class="card-title">DataTable with default features</h3> -->
             <a href="update_realestate.php">
             <button class="btn btn-info" style="float:right">Add New</button>
             </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
              
				   
				    <th>Service Name</th>
            <!-- <th>Service Image</th> -->
            <th>Content</th>
            <th>Action</th>
         
          
                </tr>
                </thead>
                <tbody>
                <?php 
				$count=1;
				
			
				
				
				$res = mysqli_query($conn,"SELECT * from realestate where is_del = 'no'");
				while($row=$res->fetch_object())
				{
					
				
          $serName = $row->heading;
          $serData = $row->content;
          $id = $row->id;

					?>
					<tr>
					<td><?php echo $serName; ?></td>
          <td><?php echo $serData; ?></td>
          <!-- <td><?php echo $serImage; ?></td> -->
        
          
					<td>	
          <a  href="update_realestate.php?val=edit&id=<?php echo $id;  ?>"  class="btn btn-sm btn-success">													
													Update 															
												</a>												
												<a  onclick="delete_data(<?php echo $id; ?>);"  class="btn btn-sm btn-danger">													
												Delete														
												</a>	
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
            
       
					
         
      </div>
    </section>
    <!-- /.content -->
  </div>
 
</div>
<!-- ./wrapper -->
<?php 
all_js();
?>
<script>
function delete_data(id)	
	{	

	// confirm("Warning ! all the data will be Deleted. Are you Sure?", function(result){ 
  //   alert(11);                                          				

	// 		if (result === true) {   
  //       alert(id);                                          				
				location.href="save_realestate.php?val=delete&id="+id;				
		// 	}  			
						
						
		// });		
				
	}	
</script>
</body>
</html>
