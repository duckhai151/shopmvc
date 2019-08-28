<?php 

class Product_Model extends Model {
	public function __autoload() {
		parent::__construct();
	}

	public function add() {
		if (isset($_POST['name_vi'])) {
			$name_vi = $_POST['name_vi'];
		    $string_vi = $_POST['name_vi'];
		    $name_en = $_POST['name_en'];
		    $string_en = $_POST['name_en'];
		    $content_vi = $_POST['content_vi'];
		    $content_en = $_POST['content_en'];
		    $category_id = 1;
		    $price = $_POST['price'];
		    $sale_price = $_POST['sale_price'];
		    $status = $_POST['status'];
		    $image = '';
		    //thêm thuộc tính cho sản phẩm
		    // $size = $_POST['size'];
		    // $color = $_POST['color'];
		    //upload ảnh chính
		    if (!empty($_FILES['image']['name'])) {
		    	$f = $_FILES['image'];
		    	$f_name = time(). '-' .$f['name'];
		    	if (move_uploaded_file($f['tmp_name'], 'upload/images/'.$f_name)) {
		      	$image = $f_name;
		    	}
			}
			$this->db->insert('product', array(
				'image' => $image,
				'price' => $price,
				'sale_price' => $sale_price,
				'status' => $status
			));	

			$id = $this->db->lastInsertId();
			$this->db->insert('product_description', array(
				'product_id' => $id,
				'name' => $name_vi,
				'content' =>$content_vi,
				'language_id' => 1,
				'string' => 'abc',
			));
			$this->db->insert('product_description', array(
				'product_id' => $id,
				'name' => $name_en,
				'content' =>$content_en,
				'language_id' => 2,
				'string' => 'abc',
			));
		}	
	}

	public function product() {
		return $this->db->selectAll('SELECT * FROM product JOIN product_description ON product.id = product_description.product_id AND product_description.language_id = 1');
	}

	public function productDetail($id) {
		return $this->db->selectOne("SELECT * FROM product JOIN product_description ON product.id = product_description.product_id AND product_description.language_id = 1 AND product.id = '$id'");
	}

	public function color($id) {
		return $this->db->selectAll("SELECT attribute_id , name FROM `product_attribute` JOIN `attribute`ON attribute_id = id AND product_id= '$id' AND type = 'color'");
	}

	public function size($id) {
		return $this->db->selectAll("SELECT attribute_id , name FROM `product_attribute` JOIN `attribute`ON attribute_id = id AND product_id= '$id' AND type = 'size'");
	}
}