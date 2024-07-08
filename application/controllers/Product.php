
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


	public function index()
	{
		$this->load->view('labindia_view/Product_view');
	}
}

