<?php
  ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);
	
	include ROOT_PATH . '/koneksidb/koneksi.php';

	$sql    = 'SELECT * FROM produk ORDER BY status DESC';
	$query  = mysqli_query($con, $sql);

?>
<div class="alert-data"></div>
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
	                             <td>
                                  <a href='#infoModal' class='fa fa-edit' data-toggle='modal' 
                                   data-id=".$row['idproduk']." >
                                  </a> |  <a href='#delete' name='delete' class='fa fa-times'  
                                   id=".$row['idproduk']." >
                                  </a>

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
                  $con->close();
                 ?>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        

        <!-- START MODAL -->
        <div class="modal fade" id="infoModal" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Product Detail</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
          </div>
        </div>
        <!-- END MODAL -->  

      <script src="bower_components/jquery/dist/jquery.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('#infoModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');

              $.ajax({
                type : 'post',
                url  : 'modules/product/Detail.php',
                data : 'rowid='+rowid,
                success : function(data){
                  $('.fetched-data').html(data);//show data on modal
                }
            });
         });
        });

        $(document).ready(function(){
          $('a').click(function (e) {
              var el = this;
              var id = this.id;
              
              $.ajax({
                type : 'post',
                url  : 'modules/product/Delete.php',
                data: { rowid:id},
                success : function(data){
                  $('.alert-data').html(data); //alert modal
                  // Removing row from HTML Table
                  $(el).closest('tr').css('background','tomato');
                  $(el).closest('tr').fadeOut(800, function(){ 
                    $(this).remove();
                  });
                }
            });
         });
        });
      </script>


        </div>
      </div>
  </section>