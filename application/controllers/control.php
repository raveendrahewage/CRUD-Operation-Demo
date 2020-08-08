<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	class control extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('models');
			$this->load->library('pdf');
		}

		public function welcome()
		{
			$this->load->view('navigation');
			$this->load->view('carousel');
			$this->load->view('welcomepage');
			$this->load->view('footer');
		}
		public function test()
		{
			$this->load->view('ssss');
		}

		public function seeusers()
		{
			$result['data']=$this->models->displayusers();
			$this->load->view('navigation');
			$this->load->view('carousel');
			$this->load->view('userlist',$result);
			$this->load->view('footer');
		}


		public function createaccount()
		{
			$this->load->view('navigation');
			$this->load->view('createaccount');
			$this->load->view('footer');

			if($this->input->post('createaccount'))
			{
				$fName=$this->input->post('fName');
				$lName=$this->input->post('lName');
				$email=$this->input->post('email');
				$phoNumber=$this->input->post('phoNumber');
				$password=$this->input->post('password');

				$this->models->savedata($fName,$lName,$email,$phoNumber,$password);
				$this->load->helper('url'); 
				redirect(base_url().'seeusers');
			}
		}

		public function deleteusers()
		{
			$id=$this->input->get('id');
			$this->models->deleteuser($id);
			$this->load->helper('url');
			redirect(base_url().'seeusers');
		}

		public function updateusers()
		{
			$id=$this->input->get('id');
			$result['data']=$this->models->displayuser($id);
			$this->load->view('navigation');
			$this->load->view('updateuser',$result);
			$this->load->view('footer');

			if($this->input->post('update'))
			{
				$id=$this->input->get('id');
				$fName=$this->input->post('fName');
				$lName=$this->input->post('lName');
				$email=$this->input->post('email');
				$phoNumber=$this->input->post('phoNumber');
				$password=$this->input->post('password');
				$this->models->updateuser($id,$fName,$lName,$email,$phoNumber,$password);
				$this->load->helper('url');
				redirect(base_url().'seeusers');
			}
		}

		public function profile()
		{
			$this->load->view('navigation');
			$this->load->view('carousel');
			$this->load->view('profile');
			$this->load->view('footer');
		}

		public function repots()
		{
			$data['userData']=$this->models->fetch();
			$this->load->view('report',$data);
		}

		public function pdfdetails()
		{
			$html_content='<style>
			table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			td, th {
			  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 8px;
			}
			</style>';
			$html_content.='<center><h3>User Details Report</h3>';
			$html_content.=$this->models->fetchUserDetails();
			$html_content.='</center>';
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("report.pdf",array("Attachment"=>0));
		}
	}
 ?>