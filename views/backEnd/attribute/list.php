<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Quản lý thuộc tính</h1>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <form action="" method="POST" class="form-inline" role="form">
            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Tìm kiếm" name="search">
            </div>
            <button type="submit" class="btn btn-primary" name="SubmitSearch" ><i class="fa fa-search"></i></button>
            <a href="add_attribute.php" class="btn btn-success">Thêm mới</a>
          </form>
        </div>
        <div class="box-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên thuộc tính</th>
                <th>Kiểu</th>
                <th>Giá trị</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($this->attributes as $attribute) { ?>
              <tr>
                <td><?php echo $attribute['id'] ?></td>
                <td><?php echo $attribute['name'] ?></td>
                <td>
                  <?php if ($attribute['type'] == 'color') :?>
                      <span style="background: <?php echo $attribute['value']; ?>;display: inline-block; width: 20px; height: 20px; border-radius: 100%"></span>
                  <?php else : ?>
                      <?php echo $attribute['value'] ?>
                  <?php endif; ?>
                </td>
                <td>
                  <?php echo $attribute['type'] ?>
                </td>
                <td>
                  <a href="edit_attribute.php?id=<?php echo $attribute['id'] ?>" class="btn btn-xs btn-primary">Sửa</a>
                  <a href="delete_attribute.php?id=<?php echo $attribute['id'] ?>" onclick="return confirm('Bạn có chắc chắn xóa thuộc tính này không?')" class="btn btn-xs btn-danger">Xóa</a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  