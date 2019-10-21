<?php


class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		//Begin Cargando Helpers
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->helper("Post_helper");
		//End Cargando Helpers

		//Begin Cargando Libreries
		$this->load->library("parse");
		//End Cargando Libreries
	}

	public function index(){
		$this->load->view("admin/test");
	}

	public function post_list(){
		$this->load->view("admin/post/list");
	}
	public function post_save(){
		$data['data_posted']=posted();
		$this->load->view("admin/post/save",$data);
	}

}
