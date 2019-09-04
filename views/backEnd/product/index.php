<div class="content-wrapper">
  <section class="content-header">
      <h1>Quản lý sản phẩm</h1>
    </section>
<!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <form action="" method="POST" class="form-inline" role="form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Tìm kiếm" name="search">
            </div>
            <button type="submit" class="btn btn-primary" name ="SubmitSearch"><i class="fa fa-search"></i></button>
            <a href="them_product.php" class="btn btn-success">Thêm mới</a>
          </form>
        </div>
        <div class="box-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Ảnh</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($this->products as $product) {?>
              <tr>
                <th><?php echo $product['id'];?></th>
                <th><?php echo $product['name'];?></th>
                <th><img src="<?php echo URL . 'upload/images/' .$product['image'];?>" style="width: 50px"></th>
                <th><?php echo $product['status'];?></th>
                <th><?php echo $product['created'];?></th>
                <th></th>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>