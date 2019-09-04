<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    	<h1>Thêm nhóm account</h1>
    </section>

    		<!-- Main content -->
    		<section class="content">
    		
    		  <!-- Default box -->
    		  <div class="box">
    		    <div class="box-body">
    		    <form action="<?php echo URL?>groupadmin/add" method="POST" role="form" >
    		    	<div class="form-group">
    		    		<label for="">Tên nhóm tài khoản</label>
    		    		<input type="text" class="form-control" name="name" placeholder="Tên nhóm tài khoản">
    		    	</div>
    		    	<div  class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    		    		<label for="">Product</label>
    		    		<div class="checkbox">
    		    			<label>
    		    				<input type="checkbox" value="list_product" name="permissions[]">Danh sách
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="add_product" name="permissions[]">Thêm mới
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="edit_product" name="permissions[]">Sửa
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="delete_product" name="permissions[]">Xóa
    		    			</label><br/>
    		    		</div>
    		    	</div>
    		    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    		    		<label for="">Thuộc tính</label>
    		    		<div class="checkbox">
    		    			<label>
    		    				<input type="checkbox" value="list_attribute" name="permissions[]">Danh sách
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="add_attribute" name="permissions[]">Thêm mới
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="edit_attribute" name="permissions[]">Sửa
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="delete_attribute" name="permissions[]">Xóa
    		    			</label><br/>
    		    		</div>
    		    	</div>
    		    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    		    		<label for="">Danh mục</label>
    		    		<div class="checkbox">
    		    			<label>
    		    				<input type="checkbox" value="list_category" name="permissions[]">Danh sách
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="add_category" name="permissions[]">Thêm mới
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="esit_category" name="permissions[]">Sửa
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="delete_category" name="permissions[]">Xóa
    		    			</label><br/>
    		    		</div>
    		    	</div>
    		    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    		    		<label for="">Banner</label>
    		    		<div class="checkbox">
    		    			<label>
    		    				<input type="checkbox" value="list_banner" name="permissions[]">Danh sách
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="add_banner" name="permissions[]">Thêm mới
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="edit_banner" name="permissions[]">Sửa
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="delete_banner" name="permissions[]">Xóa
    		    			</label><br/>
    		    		</div>
    		    	</div>
    		    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    		    		<label for="">QL đơn hàng</label>
    		    		<div class="checkbox">
    		    			<label>
    		    				<input type="checkbox" value="" name="permissions[]">Danh sách
    		    			</label><br/>
    		    		</div>
    		    	</div>
    		    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    		    		<label for="">QL khách hàng</label>
    		    		<div class="checkbox">
    		    			<label>
    		    				<input type="checkbox" value="add_account" name="permissions[]">Danh sách
    		    			</label><br/>
    		    		</div>
    		    	</div>
    		    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    		    		<label for="">QL nhóm group</label>
    		    		<div class="checkbox">
    		    			<label>
    		    				<input type="checkbox" value="list_groupadmin" name="permissions[]">Danh sách
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="add_groupadmin" name="permissions[]">Thêm
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="edit_groupadmin" name="permissions[]">Sửa
    		    			</label><br/>
    		    			<label>
    		    				<input type="checkbox" value="delete_groupadmin" name="permissions[]">Xóa
    		    			</label><br/>
    		    		</div>
    		    	</div>
    		    <div class="clearfix"></div>
    		    	<button type="submit" name="btn-add-group" class="btn btn-primary">Lưu</button>
    		    </form>
    		    </div>
    		    <!-- /.box-body -->
    		  </div>
    		  <!-- /.box -->
    		
    		</section>
    	</div>
    <!-- /.content -->
  </div>
