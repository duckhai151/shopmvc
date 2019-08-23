<div class="container">			
	<div class="row">
		<?php foreach($this->products as $product){		
		?>
		<div class="col-xs-6 col-sm-3 animation">
			<div class="product">
				<div class="product-thumb-info">
					<div class="product-thumb-info-image">
						<span class="product-thumb-info-act">
							<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper1" class="view-product">
								<span><i class="fa fa-external-link"></i></span>
							</a>
							<a href="shop-cart-full.html" class="add-to-cart-product">
								<span><i class="fa fa-shopping-cart"></i></span>
							</a>
						</span>
						<img alt="" class="img-responsive" src="<?php echo URL;?>upload/images/<?php echo $product['image']?>">
					</div>
					<div class="product-thumb-info-content">
						<span class="price pull-right">29.99 USD</span>
							<h4><a href="shop-product-detail2.html">Áo</a></h4>
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