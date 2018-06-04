<?php
defined('BASEPATH') or ext('No direct script access allowed');

class brand extends CI_Controller
{
	function __construct()
	{
		parent:: __construct();
		$this->load->model('brand_m','b');
	}

	function index()
	{
		$info['brands']=$this->b->getData();
		$this->load->view('layout/header');
		$this->load->view('data/index',$info);
		$this->load->view('layout/footer');
	}
	public function addnew()
	{
		$this->load->view('layout/header');
		$this->load->view('data/add');
		$this->load->view('layout/footer');

	}
	public function submit()
	{
		$this->form_validation->set_rules('txt_title','Title','required');
		$this->form_validation->set_rules('txt_description','Description','required');
		if($this->form_validation->run())
		{
			$result=$this->b->submit();
			redirect(base_url('brand/index'));
		}
		else
		{
			$this->load->view('layout/header');
			$this->load->view('data/add');
			$this->load->view('layout/footer');
		}
	}
	public function edit($id)
	{
		$data['brandData']=$this->b->getDataById($id);
		$this->load->view('layout/header');
		$this->load->view('data/edit',$data);
		$this->load->view('layout/footer');

	}
	public function update()
	{
		$this->b->update();
		redirect(base_url('brand/index'));

	}
	public function delete($id)
	{
		$result=$this->b->delete($id);
		redirect(base_url('brand/index'));
	}
	public function truncatetable()
	{
		$this->b->trucatethis();
		redirect(base_url('brand/index'));

	}
	public function deletealldata()
	{
		$this->b->deleteeverthing();
		redirect(base_url('brand/index'));

	}
	public function recoverall()
	{
		$this->b->recoveralldatas();
		redirect(base_url('brand/index'));

	}



}
