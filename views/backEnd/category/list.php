<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Quản lý danh mục</h1>
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
            <a href="them_category.php" class="btn btn-success">Thêm mới</a>
          </form>
        </div>
        <div class="box-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Danh mục cha</th>
                <th>Trạng thái</th>
                <th>ordering</th>
                <th>Ngày tạo</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach($this->categories as $category) { ?>
              <tr>
                <td><?php echo $category['id'] ?></td>
                <td><?php echo $category['name'] ?></td>
                <td><?php if($category['parent_id']==1): ?>
                    <!-- <span>Thời trang nam</span> -->
                    <span><?php echo $category['parent_id'] ?></span>
                    <?php elseif($category['parent_id']==2): ?>
                    <span><?php echo $category['parent_id'] ?></span>
                    <!-- <span>Thời trang nữ</span> -->
                    <?php elseif($category['parent_id']==0): ?>
                    <span>Flatize Shop</span>
                    <?php else: ?>
                      <span><?php echo $category['parent_id'] ?></span>
                      <!-- <span>Flatize Shop</span> -->
                    <?php endif; ?>
                </td>
                <td><?php if($category['status']==1): ?>
                    <span>Hiển thị</span>
                    <?php else: ?>
                      <span>Ẩn</span>
                    <?php endif; ?>
                </td>
                <td><?php echo $category['ordering'] ?></td>
                <td><?php echo $category['created'] ?></td>
                <td>
                  <a href="edit_category.php?id=<?php echo $category['id'] ?>" class="btn btn-xs btn-primary">Sửa</a>
                  <a href="delete_category.php?id=<?php echo $category['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-xs btn-danger">Xóa</a>
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
  