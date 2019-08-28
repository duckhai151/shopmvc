<div class="content">
	<div id="contain">
		<br>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="product-preview">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="uploads/<?php echo $pro_detail['image'] ?>">
									<img src="<?php echo URL; ?>upload/images/<?php echo $this->product['image'];?>" alt="">
								</li>
								

							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="summary entry-summary">
						<h1 style="padding:0 0 20px 0; text-align: center; font-weight: bold; font-family: Time New Roman; font-size: 30px"><?php echo $this->product['name']; ?>
						</h1>		
						<span class="amount" style="padding: 15px 0">
								<div class="product-thumb-info-content">
									<span class="price pull-left" style="text-decoration: none"><?php echo $this->product['price']; ?> VNĐ</span>
								</div>
							</span>
							<div class="clearfix"></div>

							<form action="handling_cart.php" method="get" class="myForm">
								<ul class="list-inline list-select clearfix">
									<li>
										<div class="list-sort">
											<select name="sizeBuy"class="formDropdown" id="size">
												<option value="" >Mời bạn chọn size</option>}
												<?php foreach($this->sizes as $size) { ?>
													<option>
														<?php echo $size['name']; ?>
													</option>
												<?php }?>	
											</select>
										</div>
									</li>
									<li>
										<div class="list-sort" >
											<select class="formDropdown" name="colorBuy" id="color">
												<option  value="">Mời bạn chọn màu</option>}
												<?php foreach($this->colors as $color) { ?>
													<option>
														<?php echo $color['name']; ?>
													</option>
												<?php }?>	
											</select>
										</div>
									</li>
								</ul>
								<ul>
									<div class="quantity pull-left">
										<input type="hidden" name="id" value="<?php echo $id;?>" >
										<input type="button" class="minus" value="  -  " id="tru">
										<input  type="text" class="input-text qty" title="Qty" value="1" name="quantity" id="quantityItem"  readonly>
										<input type="button" class="plus" value="  +  " id="cong" >
									</div>
									<button class="btn btn-primary btn-icon pull-right" id="addCart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</button>
								</ul>
							</form>
							<div class="clearfix"></div><br>
							<!-- <ul class="list-unstyled product-meta">
								<li>Sku: 54329843</li>
								<li>Categories: <a href="#">Leather</a> <a href="#">Jeans</a> <a href="#">Men</a></li>
								<li>Tags: <a href="#">Shoes</a> <a href="#">Jeans</a> <a href="#">Men</a> <a href="#">T-shirt</a></li>
							</ul> -->

							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Mô tả</a> </h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body"> 
											<?php echo $this->product['content'] ?>
										</div>
									</div>
								</div>
							</div>
						<div>
						<div class="fb-comments" data-href="http://localhost/TTS-zozo/trang-chu" data-width="" data-numposts="5"></div>
						</div>
						</div>
					</div>
				</div>
			</div>
			</div>
