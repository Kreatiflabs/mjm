<?php
  ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);
	
	//define("ROOT_PATH", '../');
	include ROOT_PATH . '/koneksidb/koneksi.php';

	$sql    = 'SELECT * FROM machines ORDER BY status DESC';
	$query  = mysqli_query($con, $sql);

?>
<section class="content-header">
  <h1>Machines
      <small>List Machines</small>
   </h1>
    <ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Machines</a></li>
        <li class="active">List Machines</li>
    </ol>
</section>
  <section class="content">
	<div class="row">
    	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-list-alt"></i> List Machines</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>#</th>
                  <th>Action</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Picture</th>
                  <th>Created Date</th>
                  <th>Created By</th>
                  <th>Status</th>
                </tr>
                <?php 
                	$i = 1;
                	while ($row = mysqli_fetch_array($query)){
                		echo "<tr> 
	                             <td>".$i."</td>
	                             <td>
                                  <a class='fa fa-edit' data-toggle='modal' data-target='#modal-info'
                                   data-id=".$row['idmachine']." >
                                  Edit</a>

                               </td>
	                             <td>".$row['nama']."</td>
	                             <td>".$row['deskripsi']."</td>
	                             <td>".$row['thumbnails']."</td>
	                             <td>".$row['created_date']."</td>
	                             <td>".$row['created_by']."</td>
	                             <td>".$row['status']."</td>
    	             		  </tr>";
			         		$i++;
                	}
                 ?>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          



<!-- START MODAL -->

  <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Product</h4>
              </div>
              <div class="modal-body" id="1" >
              <p>Name</p>
              <p>DEskripsi</p>
              <p>Status</p>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline">Save</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<!-- END MODAL -->        



        </div>
      </div>
  </section>