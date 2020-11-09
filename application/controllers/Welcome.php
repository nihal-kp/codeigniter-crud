<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->model('queries');									// load model queries
		$users = $this->queries->getUsers();							// load getUsers function in queries model and assigning to $users. //To print print_r($users);
		$this->load->view('welcome_message', ['users'=>$users]);
	}
	public function create()
	{
		$this->load->view('create');
	}
	public function save()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('age', 'Age', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');

		if ($this->form_validation->run())
		{
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			$this->queries->addUser($data);
			$this->session->set_flashdata('msg1', 'Details saved successfully!');	  						//set_flashdata is a method of session library which allows us to display the message only once
			return redirect('welcome');
		}
		else
		{
			$this->load->view('create');
		}
	}
	public function update($id)
	{
		$this->load->model('queries');
		$user = $this->queries->getSingleUser($id);
		$this->load->view('update',['user'=>$user]);
	}
	public function change($id)
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('age', 'Age', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');

		if ($this->form_validation->run())
		{
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			$this->queries->updateUser($data,$id);
			$this->session->set_flashdata('msg2', 'Details updated!');
			return redirect('welcome');
		}
		else
		{
			$this->load->view('update');
		}
	}

	public function view($id)
	{
		$this->load->model('queries');
		$user = $this->queries->getSingleUser($id);
		$this->load->view('view',['user'=>$user]);
	}

	public function delete($id)
	{
		$this->load->model('queries');
		$this->queries->deleteUser($id);
		$this->session->set_flashdata('msg3', 'Deleted successfully!');
		return redirect('welcome');
	}
}
