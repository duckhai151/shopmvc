<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Thêm mới danh mục</h1>
    </section>  
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <form action="<?php echo URL?>category/add" method="POST">
            <div class="form-group">
              <label for="">Tên danh mục</label>
              <input type="text" name="name" class="form-control" placeholder="Tên danh mục" >
            </div>
            <div class="form-group">
              <label for="">Danh mục cha</label>
              <select name="parent_id" id="input" class="form-control" >
                <option value="0">------------Chọn danh mục-----------</option>
                <?php foreach($this->categories as $category){?>
                  <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Thứ tự sắp xếp</label>
              <input type="text" name="ordering" class="form-control" placeholder="Thứ tự sắp xếp" >
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

            <button type="submit" class="btn btn-primary" name ="submit" >Gửi</button>
          </form>

        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
