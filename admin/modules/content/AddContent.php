
<div class="alert-data-succes"></div>
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Add
        <small>Content</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Content</li>
           <li class="active">Add Content</li>
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
              <h4  align="left"> <i class="fa fa-edit"></i> Content</h4>

            <div class="col-md-8">
              <form role="form" id="data" enctype="multipart/form-data" name="form" >
                <div class="box-body">
                  <div class="form-group">
                    <label>Title Name</label>
                    <input type="text" name="title" class="form-control" placeholder="Title Name..." required>
                  </div>
                  <label>Content</label>
                    <textarea class="textarea" name='content' placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
              
                </div>
                <div class="box-footer">
                  <button type="reset" class="btn btn-danger">Cancel</button> 
                  <button type="submit" name="submit" name='submit' class="btn btn-primary">Submit</button>
                </div>
              </form>
              <script src="bower_components/jquery/dist/jquery.min.js"></script>
              <script>
                 $("form#data").submit(function(e) {
                   e.preventDefault();    
                   var formData = new FormData(this);
                   $.ajax({
                      url: 'modules/content/Insert.php',
                      type: 'post',
                      data: formData,
                   success: function (data) {
                      $('.alert-data-succes').html(data);
                      $("form#data")[0].reset();
                   },
                   cache: false,
                   contentType: false,
                   processData: false
                   });
                 });    
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>