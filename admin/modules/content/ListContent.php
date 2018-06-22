<?php
  ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);
	
	include ROOT_PATH . '/koneksidb/koneksi.php';

	$sql    = 'SELECT * FROM konten ORDER BY created_date DESC';
	$query  = mysqli_query($con, $sql);

?>
<!-- Alert -->
<div class="alert-data"></div>

<section class="content-header">
  <h1>Content
      <small>List Content</small>
   </h1>
    <ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Content</a></li>
        <li class="active">List Content</li>
        <li></li>
    </ol>
</section>
  <section class="content">
	<div class="row">
    	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-list-alt"></i> List Content</h3>&nbsp
               <a href='?page=navigation&act=listContent' name='refresh' class='fa fa-refresh'/> </a>
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
                  <th>Title Content</th>
                  <th>Content</th>
                  <th>Created Date</th>
                  <th>Created By</th>
                </tr>
                <?php 
                	$i = 1;
                	while ($row = mysqli_fetch_array($query)){
                		echo "<tr> 
	                             <td>".$i."</td>
	                             <td>
                                <a href='#delete' name='delete' class='fa fa-times'  
                                   id=".$row['idkonten']." >
                                  </a>
                               </td>
	                             <td>".$row['title']."</td>
	                             <td>".$row['konten']."</td>
	                             <td>".$row['created_date']."</td>
	                             <td>".$row['created_by']."</td>
    	             		  </tr>";
			         		$i++;
                	}
                  
                 ?>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        
      <script src="bower_components/jquery/dist/jquery.min.js"></script>
      <script type="text/javascript">

        $(document).ready(function(){
          $('a').click(function (e) {
              var el = this;
              var id = this.id;
              
              $.ajax({
                type : 'post',
                url  : 'modules/content/Delete.php',
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