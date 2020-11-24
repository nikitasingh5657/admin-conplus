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
            <h1>Service Page </h1>
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
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
              
				   
				    <th>Page Name</th>
            <th>Contact Pesrson</th>
            <th>Position</th>
            <th>Mail</th>
            <th>telephone</th>
            <th>Contact Image</th>
            <th>Action</th>
         
          
                </tr>
                </thead>
                <tbody>
                <?php 
				$count=1;
				
			
				
				
				$res = mysqli_query($conn,"select * from services");
				while($row=$res->fetch_object())
				{
					
				
          $serName = $row->serviceName;
          $serData = $row->serviceData;
          $serImage = $row->serviceImage;
          $contact_person = $row->contact_person;
          $position = $row->position;
          $contact_email = $row->contact_email;
          $contact_no = $row->contact_no;
        		?>
					<tr>
					<td><?php echo $serName; ?></td>
          <td><?php echo $contact_person; ?></td>
          <td><?php echo $position; ?></td>
          <td><?php echo $contact_email; ?></td>
          <td><?php echo $contact_no; ?></td>
          	 <td><img src="../images/<?php echo $serImage; ?>" alt="" width="200px"></td>
         
          
        
         <td>	<a href="update_service.php?id=<?php echo $row->id ?>" ><div  class="btn btn-success">Update</div></a>
         
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
</body>
</html>
