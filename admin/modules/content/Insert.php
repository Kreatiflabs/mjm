<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);
	
	  //sesuiakan path DIR projek
    $pathDir = "/html/companyProfile/mjm";
    require_once $_SERVER['DOCUMENT_ROOT'].$pathDir.'/koneksidb/koneksi.php';

          $title       = $_POST['title'];
          $content     = $_POST['content'];
          $createdDate = date("Y-m-d h:i:sa");
          $createdBy   = 'admin';

          $sql = 'INSERT INTO konten (title,konten,created_date,created_by) 
                    VALUES("'.$title.'","'.$content.'","'.$createdDate.'","'.$createdBy.'")';
          $query  = mysqli_query($con, $sql);
          if($query === TRUE){
              echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    Success.
                  </div>';
          }
 		     $con->close();

	?>