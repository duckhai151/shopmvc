<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Thêm mới sản phẩm</h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
        <form action="<?php echo URL?>product/add" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                <label for="">Tên sản phẩm(Tiếng Việt)</label>
                <input type="text" name="name_vi" class="form-control" placeholder="Tên sản phẩm.." >
              </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                <label for="">Tên sản phẩm(Tiếng Anh)</label>
                <input type="text" name="name_en" class="form-control" placeholder="Tên sản phẩm.." >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Ảnh sản phẩm</label>
                <input type="file" name="image" class="form-control" id="add_img">
                
              </div>
            </div>
           <div class="col-md-8">
              <div class="form-group">
                <label for="">Ảnh khác</label>
                <input type="file" name="image_else[]" class="form-control" id="add_img_else" multiple>
                <div id="show_img_else"></div>
              </div>
           </div>
          </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Giá</label>
              <input type="text" name="price" class="form-control" id="" placeholder="Giá sản phẩm..">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Giá khuyến mãi</label>
              <input type="text" name="sale_price" class="form-control" id="" placeholder="Giá khuyến mãi..">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Danh mục</label>
              <!-- <select name="category_id" class="form-control" required="required"> -->
                <div class="checkbox">
                  <label>
                  
                  </label>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Kích thước</label>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="size[]" value="">
                  </label>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Màu sắc</label>
             
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="color[]" value="">
                  </label>
                </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Mô tả(Tiếng Việt)</label>
              <textarea name="content_vi" id="content" class="form-control" ></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Mô tả(Tiếng Anh)</label>
              <textarea name="content_en" id="content" class="form-control" ></textarea>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="">Trạng thái</label>
          <div class="radio">
            <label>
              <input type="radio" name="status" id="input" value="1" checked="checked">Hiện
            </label> 
            <label>
              <input type="radio" name="status" id="input" value="0" checked="checked">Ẩn
            </label>
          </div>
        </div>
        <div class="form-group">

          <button type="submit" class="btn btn-primary" >Gửi</button>
        </div>
      </form>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
</div>