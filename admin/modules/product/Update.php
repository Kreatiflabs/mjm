<?php

	ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);
	
	//sesuiakan path DIR projek
    $pathDir = "/html/companyProfile/mjm";

    require_once $_SERVER['DOCUMENT_ROOT'] . $pathDir.'/koneksidb/koneksi.php';

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

    //print_r($file);
    //die();

    $targetThumb = $targetDirThumb.$b;

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
 		$id          = $_POST['id'];
        $product     = $_POST['product'];
        $description = $_POST['deskripsi'];
        $createdDate = date("Y-m-d h:i:sa");
        $status      = $_POST['status'];

    //  $check = getimagesize($_FILES["images"]["tmp_name"]);
      //  if($check !== false) {
        
          // $uploadOk = 1;
          //   if ($uploadOk = 1) {
              //move_uploaded_file($_FILES["images"]["tmp_name"], $targetFile);
              //copy($targetFile, $targetThumb);
              //Update to Query     
                 // $sql = "UPDATE produk SET nama='$product',thumbnails='$file',file='$file',created_date='$createdDate',created_by='admin',status='$status' WHERE idproduk = $id";
              $sql = "UPDATE produk SET nama='$product',deskripsi='$description',created_date='$createdDate',created_by='admin',status='$status' WHERE idproduk = $id";
                 $query  = mysqli_query($con, $sql);
              $query  = mysqli_query($con, $sql);
            // } else {
            //   echo "Sorry, there was an error uploading your file.";
            // }
      //  } else {
        //   echo "File is not an image.";
        //   $uploadOk = 0;
        // }		
 	    
    $con->close();

?>