<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);
	
	 include ROOT_PATH.'/koneksidb/koneksi.php';


    //Target Dir File
    $targetDir = "../img/portfolio/products/fullsize/";
    
    //Target Dir Thumbnails
    $targetDirThumb = "../img/portfolio/products/thumbnails/";

    //rename image file
    $sqlImg    = 'SELECT idproduk FROM produk ORDER BY idproduk DESC';
    $queryImg  = mysqli_query($con, $sqlImg);
    $row = mysqli_fetch_array($queryImg);
    $a=$row['idproduk']+1;
    $b="IMG_".$a;
  
    //base name upload
    $targetFile = $targetDir.$b;
    $file = basename($targetFile);

    $targetThumb = $targetDirThumb.$b;


    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
      if(isset($_POST["submit"])) {
          $product     = $_POST['product'];
          $description = $_POST['description'];
          $createdDate = date("Y-m-d h:i:sa");
          $status      = $_POST['status'];

      $check = getimagesize($_FILES["images"]["tmp_name"]);
        if($check !== false) {
        //  echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
            if ($uploadOk = 1) {
              move_uploaded_file($_FILES["images"]["tmp_name"], $targetFile);
              copy($targetFile, $targetThumb);
              //Insert to Query     
              $sql = 'INSERT INTO produk (nama,deskripsi,thumbnails,file,created_date,created_by,status) 
                    VALUES("'.$product.'","'.$description.'","'.$file.'","'.$file.'","'.$createdDate.'","admin","'.$status.'")';
              $query  = mysqli_query($con, $sql);
                if($query === TRUE){
              echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    Success.
                  </div>';
              }
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      }

 		$con->close();

	?>

<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Add
        <small>Product</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Product</a></li>
           <li class="active">Add Product</li>
      </ol>
</section>
	<!-- Main content -->
	<section class="content">
        <!-- left column -->
       <div class="row">
        <div class="col-xs-12">
        <div class="box">
          <div class="box box-primary">
           <div class="box-header with-border">
              <h4  align="left"> <i class="fa fa-edit"></i> Product</h4>

          	<div class="col-md-8">
          	  <form role="form" action="#" method="POST" enctype="multipart/form-data" name="form" onSubmit="return OnUploadCheck();">
              	<div class="box-body">
               		<div class="form-group">
                		<label>Product Name</label>
                 		<input type="text" name="product" class="form-control" placeholder="Product Name..." required>
               		</div>
               		<div class="form-group">
                 		<label>Description</label>
                 		<textarea class="form-control" name="description" rows="3" placeholder="Description..." required></textarea>
                	</div>
               		<div class="form-group">
                 		<label for="InputFile">File input</label>
                 		<input type="file" name="images" id="InputFile">
               		</div>
               		<div class="form-group">
              			<label>Status</label></br>
                		<label>
                  			<input type="radio" name="status" value="1" class="minimal" checked>
                  			Active
                		</label>&nbsp;
                		<label>
                  			<input type="radio" name="status" value="0" class="minimal">
                  			Inactive
                		</label>
              		</div>
             	</div>
             	<div class="box-footer">
                	<button type="reset" class="btn btn-danger">Cancel</button>	
                	<button type="submit" onclick="checkFile();" name="submit" class="btn btn-primary">Submit</button>
              	</div>
              </form>
              <script>
                function checkFile() {
                    document.getElementById("InputFile").required = true;
    
                }
                function OnUploadCheck(){
                  var extall="jpg,jpeg,gif,png";
                  file = document.form.images.value;
                  ext = file.split('.').pop().toLowerCase();
                    if(parseInt(extall.indexOf(ext)) < 0){
                      alert('Extension File Images Support : ' + extall);
                      return false;
                    }
                    return true;
                }
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>