<?php
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL|E_STRICT);
	
	define("ROOT_PATH", '../');
	include ROOT_PATH . '/koneksidb/koneksi.php';

		$product = $_POST['product'];
		$description =$_POST['description'];
	   //   echo("First name: " .$product. "<br />\n");
	 //     echo("Last name: " .$description. "<br />\n");

	   	$sql    = 'INSERT INTO produk (nama,deskripsi) VALUES("'.$product.'","'.$description.'")';
 		$query  = mysqli_query($con, $sql);

		if ($query === TRUE) {
    	//	echo "New record created successfully";
		} else {
    	//	echo "Error: " . $sql . "<br>" . $con->error;
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
          	  <form role="form" action="#" method="POST">
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
                 		<input type="file" id="InputFile">
               		</div>
               		<div class="form-group">
              			<label>Status</label></br>
                		<label>
                  			<input type="radio" name="status" class="minimal" checked>
                  			Active
                		</label>&nbsp;
                		<label>
                  			<input type="radio" name="status" class="minimal">
                  			Inactive
                		</label>
              		</div>
             	</div>
             	<div class="box-footer">
                	<button type="reset" class="btn btn-danger">Cancel</button>	
                	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
              	</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>