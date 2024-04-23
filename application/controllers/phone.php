<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class phone extends CI_Controller {

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

    $data = array('id' => '');
    $data['attributes'] = array('class' => 'form');
    $data['prop'] = array('class' => 'form-control');
    $ndata['login']=$this->session_data;
		$data['phone'] = $this->lab_model->get_all_data('phone');


    $this->load->view('common/header',$ndata);


    $this->load->view('phone/index',$data);
		$this->load->view('common/footer');
	}




  public function store()
	{
    $this->load->library('form_validation');
		$this->load->helper(array('form'));


		$this->form_validation->set_rules('name', '  Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone number', 'required');

		$this->form_validation->set_rules('date', 'Date contacted', 'trim|required|date');
    $this->form_validation->set_rules('save', 'Sarvice   offerd', 'required');
		$this->form_validation->set_rules('acc', 'Acronym', 'required');



    if ($this->form_validation->run() === FALSE)
		{
			$this->create();
		}
    else
		{
  	  	$dataphone = array(
					'name' => $this->input->post('name'),
					'phone' => $this->input->post('phone'),

					'date' => $this->input->post('date'),
					'save' => $this->input->post('save'),
					'acc' => $this->input->post('acc'),

          'regBy' => $this->session_data['loggedId']

					);
        $userRegId=$this->lab_model->insert_data('phone', $dataphone);
				redirect($_SERVER['HTTP_REFERER'],'refresh');
		}
	}
}
