<?php
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL|E_STRICT);

    //sesuiakan path DIR projek
    $pathDir = "/html/companyProfile/mjm";
    require_once $_SERVER['DOCUMENT_ROOT'].$pathDir.'/koneksidb/koneksi.php';
 


    if($_POST['rowid']) {
        $id = $_POST['rowid'];
        $sql = "SELECT * FROM produk WHERE idproduk = $id";
		$query  = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($query)){ ?>
        	<!-- START FORM -->
        	<form role="form" id="data" enctype="multipart/form-data" name="form" >
                <div class="alert-data-succes"></div>
            	<input type="hidden" id='idproduct' name="id" value="<?php echo $row['idproduk']; ?>">
            	<div class="form-group">
                	<label>Product Name</label>
                	<input type="text" id='name' class="form-control" name="product" value="<?php echo $row['nama']; ?>" required>
            	</div>
            	<div class="form-group">
                	<label>Description</label>
                	<textarea class="form-control" id='description' rows="4" name="deskripsi" required ><?php echo $row['deskripsi']; ?></textarea>
            	</div>
              <!--   <div class="form-group">
                        <label for="InputFile">File input</label>
                        <input type="file" name="images" id="inputFile">
                        
               </div> -->
                <div class="form-group">
                        <label>Status</label></br>
                        <label>
                        <input type="radio" id='status' name="status" value="1" <?php echo ($row['status']=='1')?'checked':'' ?> class="minimal">
                            Active
                        </label>&nbsp;
                        <label>
                            <input type="radio" id='status' name="status" value="0" <?php echo ($row['status']=='0')?'checked':'' ?> class="minimal">
                            Inactive
                        </label>
                </div>
              <button class="btn btn-primary" name='submit' id='update' type="submit">Update</button>
        	</form>
 
 <?php }
    } 
    ?>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript">
    // $(document).ready(function(){
    //             $("#update").click(function(){
    //                 var id=$("#idproduct").val();
    //                 var name=$("#name").val();
    //                 var description=$("#description").val();
    //                 var inputFile=$("#inputFile").val();
    //                 var status=$("#status").val();

    //                 $.ajax({
    //                     url:'modules/product/Update.php',
    //                     method:'post',
    //                     data:{
    //                         id:id,
    //                         name:name,
    //                         description:description,
    //                         inputFile:inputFile,
    //                         status:status,
    //                     },
    //                     cache: "no-cache",
    //                     success: function(response){
    //                         console.log(response);
    //                     },
    //                     error: function(errMsg) {
    //                         console.log(errMsg);
    //                     }
    //                 });
    //             });
    //         });


    $("form#data").submit(function(e) {
        e.preventDefault();    
        var formData = new FormData(this);
        $.ajax({
            url: 'modules/product/Update.php',
            type: 'post',
            data: formData,
            success: function (data) {
            $('.alert-data-succes').html(data);
            //$('#infoModal').modal('hide');    
        },
        cache: false,
        contentType: false,
        processData: false
        });
    });
   
</script>



