<?php 

class AdminController extends Controller {
	private $_url = null;
	function __construct() {
		parent::__construct();
		$this->checkPermissions();
	}

	private function _getUrl()
	{
		$this->_url = isset($_GET['url']) ? $_GET['url'] : null;
		$this->_url = str_replace('-', '', $this->_url);
		$this->_url = filter_var($this->_url, FILTER_SANITIZE_URL);
		$this->_url = rtrim($this->_url, '/');
		$this->_url = explode('/', $this->_url);
	}

	function checkPermissions() {
		SESSION::init();
		$this->_getUrl();
		$c = $this->_url[0];
		$m = $this->_url[1];
		$c = strtolower($c);
		$m = strtolower($m);
		$m_c = $m . '_' . $c;
		if(in_array($m_c, $_SESSION['ad']['permission'])) {
			return TRUE;
		} else {
			echo "<script type='text/javascript'>alert('Bạn không đủ quyền để vào');
         	window.location.assign('http://localhost/shopmvc/dashboard');
          	</script>";
		}
	}
}