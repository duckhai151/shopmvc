<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Thêm mới thuộc tính</h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <form action="" method="POST">
            <div class="form-group">
              <label for="">Tên thuộc tính</label>
              <input type="text" name="name" class="form-control" placeholder="Tên thuộc tính.." >
            </div>
            <div class="form-group">
              <label for="">Giá trị</label>
              <input type="text" name="value" class="form-control" placeholder="Tên giá trị.." >
            </div>
            <div class="form-group">
              <div class="radio">
                <label>
                  <input type="radio" name="type" value="color" checked>Color
                </label>
                <label>
                  <input type="radio" name="type" value="size" >Size
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
