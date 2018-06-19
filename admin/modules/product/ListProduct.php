<?php
    //ini_set('display_errors', 1);
	//error_reporting(E_ALL|E_STRICT);
	
	define("ROOT_PATH", '../');
	include ROOT_PATH . '/koneksidb/koneksi.php';

	$sql    = 'SELECT * FROM produk ORDER BY status DESC';
	$query  = mysqli_query($con, $sql);

?>
<section class="content-header">
  <h1>Product
      <small>List Product</small>
   </h1>
    <ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Product</a></li>
        <li class="active">List Product</li>
    </ol>
</section>
  <section class="content">
	<div class="row">
    	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-list-alt"></i> List Product</h3>
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
	                             <td>Update</td>
	                             <td>".$row['nama']."</td>
	                             <td>".$row['deskripsi']."</td>
	                             <td>".$row['gambar']."</td>
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
        </div>
      </div>
  </section>