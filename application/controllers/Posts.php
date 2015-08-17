<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('post');
	}

	public function index()
	{
		$result = $this->post->get_all_notes();
		$notes = array(
			"notes" => $result
		);
		$this->load->view('notes', $notes);
	}

	public function create()
	{
		$result = $this->post->create($this->input->post());
		$notes = $this->post->get_all_notes();
		$this->load->view('partials/index', array('notes' => $notes));
	}

	public function update($id)
	{
		$result = $this->post->update($id, $this->input->post());
		$notes = $this->post->get_all_notes();
		$this->load->view('partials/index', array('notes' => $notes));	
	}
	public function delete($id)
	{
		$result = $this->post->delete($id);
		$notes = $this->post->get_all_notes();
		$this->load->view('partials/index', array('notes' => $notes));
	}

}

//end of main controller