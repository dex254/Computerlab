<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class occup extends CI_Controller {

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
		$data['occup'] = $this->lab_model->get_all_data('occup');


    $this->load->view('common/header',$ndata);


    $this->load->view('occup/index',$data);
		$this->load->view('common/footer');
	}


public function create()
	{
    $data = array('id' => '');
    $data['attributes'] = array('class' => 'form');
    $data['prop'] = array('class' => 'form-control');

    $ndata['login']=$this->session_data;

    $this->load->view('common/header',$ndata);

    $this->load->view('occup/create',$data);
    $this->load->view('common/footer');
	}

  public function store()
	{
    $this->load->library('form_validation');
		$this->load->helper(array('form'));




		$this->form_validation->set_rules('date', 'Date Planted', 'trim|required|date');
    $this->form_validation->set_rules('name', 'Land size', 'required');
		$this->form_validation->set_rules('serial', 'Fatilizer Quantity', 'required');



    if ($this->form_validation->run() === FALSE)
		{
			$this->create();
		}
    else
		{
  	  	$dataoccup = array(


					'date' => $this->input->post('date'),
					'name' => $this->input->post('name'),
					'serial' => $this->input->post('serial'),

          'regBy' => $this->session_data['loggedId']

					);
        $userRegId=$this->lab_model->insert_data('occup', $dataoccup);
				redirect($_SERVER['HTTP_REFERER'],'refresh');
		}
	}
}
