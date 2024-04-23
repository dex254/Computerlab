<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class live extends CI_Controller {

	function __construct()
    {
   	 parent::__construct();
   	 $this->load->helper("url");   //call the form helper
   	 $this->load->helper('form');
  	 $this->load->library('session');
    $this->load->model('lab_model','',TRUE);
    $this->session_data = $this->session->userdata('logged_in');
    if(empty($this->session_data))
    {
       redirect('login');
    }
    }

	public function index()
	{

    $ndata['login']=$this->session_data;
		$data['live'] = $this->lab_model->get_all_data('live');


    $this->load->view('common/header',$ndata);


    $this->load->view('live/index',$data);
		$this->load->view('common/footer');
	}


public function create()
	{
    $data = array('id' => '');
    $data['attributes'] = array('class' => 'form');
    $data['prop'] = array('class' => 'form-control');

    $ndata['login']=$this->session_data;

    $this->load->view('common/header',$ndata);

    $this->load->view('live/create',$data);
    $this->load->view('common/footer');
	}

  public function store()
	{
    $this->load->library('form_validation');
		$this->load->helper(array('form'));


		$this->form_validation->set_rules('name', 'Animal Names', 'required');
		$this->form_validation->set_rules('breed', 'Animal breed', 'required');

		$this->form_validation->set_rules('date', 'Date Bought', 'trim|required|date');
    $this->form_validation->set_rules('cond', 'Condition', 'required');

		$this->form_validation->set_rules('pesa', 'Price', 'required');

    if ($this->form_validation->run() === FALSE)
		{
			$this->create();
		}
    else
		{
  	  	$datalive = array(
					'name' => $this->input->post('name'),
					'breed' => $this->input->post('breed'),

					'date' => $this->input->post('date'),
					'cond' => $this->input->post('cond'),
          'pesa' => $this->input->post('pesa'),
          'regBy' => $this->session_data['loggedId']

					);
        $userRegId=$this->lab_model->insert_data('live', $datalive);
				redirect($_SERVER['HTTP_REFERER'],'refresh');
		}
	}
}
