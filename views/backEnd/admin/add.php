<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
	<section class="content-header">
	<h1>From đăng kí</h1>
	</section>

	<!-- Main content -->
	<section class="content">

	<!-- Default box -->
	<div class="box">
	<div class="box-body">
	<form action="" method="POST" role="form" >
		<div class="form-group">
			<label for="">Họ và tên</label>
			<input type="text" class="form-control" name="name" placeholder="Mời bạn nhập Họ và tên">
			<?php if (isset($errors['Full name'])) {?>
				<div class="help-block" style="color: red">
					<?php echo $errors['Full name'] ?>
				</div>
			<?php } ?>
		</div>
		<div class="form-group">
			<label for="">Số điện thoại</label>
			<input type="text" class="form-control" name="phone" placeholder="Mời bạn nhập Số điện thoại">
			<?php if (isset($errors['phone'])) {?>
				<div class="help-block" style="color: red">
					<?php echo $errors['phone'] ?>
				</div>
			<?php } ?>
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Mời bạn nhập Email">
			<?php if (isset($errors['email'])) {?>
				<div class="help-block" style="color: red">
					<?php echo $errors['email'] ?>
				</div>
			<?php } ?>
		</div>
		<div class="form-group">
			<label for="">Mật khẩu</label>
			<input type="password" class="form-control" name="password" placeholder="Mời bạn nhập Mật khẩu">
			<?php if (isset($errors['password'])) {?>
				<div class="help-block" style="color: red">
					<?php echo $errors['password'] ?>
				</div>
			<?php } ?>
		</div>
		<div class="form-group">
			<label for="">Nhập lại mật khẩu</label>
			<input type="password" class="form-control" name="repassword" placeholder="Mời bạn nhập lại mật khẩu">
			<?php if (isset($errors['repassword'])) {?>
				<div class="help-block" style="color: red">
					<?php echo $errors['repassword'] ?>
				</div>
			<?php } ?>
		</div>
		<div class="form-group">
			<label for="">Địa chỉ</label>
			<input type="text" class="form-control" name="address" placeholder="Mời bạn nhập Địa chỉ">
	    	<?php if (isset($errors['address'])) {?>
				<div class="help-block" style="color: red">
					<?php echo $errors['address'] ?>
				</div>
			<?php } ?>
		</div>
		<div class="form-group">
    		<label for="">Nhóm tài khoản</label>
    		<select name="level"class="form-control">
    		 	<?php foreach ($this->permissions as $permission) {?>
    		 	<option value=<?php echo $permission['id']?> ><?php echo $permission['name'] ?></option>
    		 	<?php } ?>
    		</select>
    	</div>
    		<button type="submit" name="dangki" class="btn btn-primary">Đăng kí</button>
    		</form>
    		</div>
    		    <!-- /.box-body -->
    		  </div>
    		  <!-- /.box -->
    		
    		</section>
    	</div>
    <!-- /.content -->
  </div>


