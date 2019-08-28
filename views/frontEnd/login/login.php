<?php 
require 'views/frontEnd/header.php';
?>
<div class="container-login100" style="background-image: url('<?php echo URL;?>public/images/bg-01.jpg');  ">
	<div class="modal-dialog" >
		<div class="modal-body">
			<form class="login100-form validate-form" method="post" >

				<span class="login100-form-title p-b-49" >
					Đăng nhập
				</span>

			<div class="wrap-input100 validate-input m-b-23" data-validate="Email is required">
				<span class="label-input100">Email</span>
				<input class="input100" type="text" name="email" placeholder="Type your Email" value="">

					<div class="help-block" style="color: red">

					</div>

				
					<div class="help-block" style="color: red">
						
					</div>

				<span class="focus-input100" data-symbol="&#xf190;"></span>
			</div>
	
			<div class="wrap-input100 validate-input m-b-23" data-validate="Password is required">
				<span class="label-input100">Mật khẩu</span>
				<input class="input100" type="password" name="password" placeholder="Type your password">
		
					<div class="help-block" style="color: red">

					</div>


					<div class="help-block" style="color: red">
						
					</div>
				
				<span class="focus-input100" data-symbol="&#xf190;"></span>
			</div>
	
				<div class="text-right p-t-8 p-b-31">
					<a href="forgot_pass.php">
						Quên mật khẩu?
					</a>
				</div>
	
				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn" type="submit" name="login">
							login
						</button>
					</div>
				</div>
	
				<div class="flex-col-c p-t-155">
					<span class="txt1 p-b-17">
						Bạn chưa có tài khoản?
					</span>
	
					<a href="registration.php" class="txt2">
						Đăng kí ngay
					</a>
				</div>
			</form>
		</div>
	</div>
</div>