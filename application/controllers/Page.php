<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct() {
		 parent::__construct();
		 $this->load->helper('url');
	 }


	public function view($page) {
		if (!file_exists(FCPATH. 'application/views/' . $page . '.php')) {
			show_404();
		}
		else {
			$this->load->view('templates/header');
			$this->load->view('templates/appbar');
			$this->load->view($page);
			$this->load->view('templates/footer');
		}
	}

}
