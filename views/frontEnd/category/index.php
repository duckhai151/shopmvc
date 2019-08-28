<div class="container">			
	<div class="row">
		<?php foreach($this->products as $product){		
		?>
		<div class="col-xs-6 col-sm-3 animation">
			<div class="product">
				<div class="product-thumb-info">
					<div class="product-thumb-info-image">
						<span class="product-thumb-info-act">
							<a href="<?php echo URL;?>product/detail/<?php echo $product['id']; ?>">
								<span>
									<i class="fa fa-external-link"></i>
								</span>
							</a>
						</span>
						<img alt="" class="img-responsive" src="<?php echo URL;?>upload/images/<?php echo $product['image']?>">
					</div>
					<div class="product-thumb-info-content">
						<span class="price pull-right"><?php echo $product['price'];?></span>
							<h4><a href="shop-product-detail2.html"><?php echo $product['name']; ?></a></h4>
						<span class="item-cat"><small><a href="#">Jackets</a></small></span>
					</div>
				</div>
			</div>
		</div>
		<?php 
		}?>
	</div>
</div>
<!-- End Main -->