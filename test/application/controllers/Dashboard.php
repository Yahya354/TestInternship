<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('MDashboard'));
	}

	public function index()
	{
		$this->load->view("dashboard");
	}

	public function detail()
	{
		$this->load->view("detail");
	}

	public function getAllDiskusi()
	{
		if($_POST['Get'] == "41ff8b56dc1600ebb68aa901a4299d12"){
			$result = $this->MDashboard->getAllDiskusi();
			echo json_encode($result);
		}
	}
}
