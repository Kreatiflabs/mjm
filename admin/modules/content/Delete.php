<?php
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);

    //sesuiakan path DIR projek
    $pathDir = "/html/companyProfile/mjm";
    require_once $_SERVER['DOCUMENT_ROOT'].$pathDir.'/koneksidb/koneksi.php';
 


    if($_POST['rowid']) {
        $id = $_POST['rowid'];
        $sql = "DELETE FROM konten WHERE idkonten = $id";
		$query  = mysqli_query($con, $sql);
        if($query === TRUE){
            echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    Success Delete.
                  </div>';
        }
    }

    ?>
