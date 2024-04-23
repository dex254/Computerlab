<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class offinvan extends CI_Controller {

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
		$data['attributes'] = array('class' => 'contact-form');
		$data['offinvan'] = $this->lab_model->get_all_data('offinvan');


    $this->load->view('common/header',$ndata);


    $this->load->view('offinvan/index',$data);
		$this->load->view('common/footer');
	}


public function create()
	{
    $data = array('id' => '');
    $data['attributes'] = array('class' => 'form');
    $data['prop'] = array('class' => 'form-control');



    $ndata['login']=$this->session_data;

    $this->load->view('common/header',$ndata);

    $this->load->view('offinvan/create',$data);
    $this->load->view('common/footer');
	}

  public function store()
	{
    $this->load->library('form_validation');
		$this->load->helper(array('form'));


		$this->form_validation->set_rules('name', 'item name offinvaned', 'required');
		$this->form_validation->set_rules('serial', 'serial number', 'required');



    $this->form_validation->set_rules('conde', 'condition of the item', 'required');



    if ($this->form_validation->run() === FALSE)
		{
			$this->create();
		}
    else
		{
  	  	$dataoffinvan = array(
					'name' => $this->input->post('name'),

					'serial' => $this->input->post('serial'),
					'conde' => $this->input->post('conde'),

          'regBy' => $this->session_data['loggedId']

					);
        $userRegId=$this->lab_model->insert_data('offinvan', $dataoffinvan);
				$this->session->set_flashdata('message', '😒😂😂You have successfully    uploaded a new Product to database 👮‍♂️👮‍♂️🥷   you can vew contents from the view  table list 🍎🍎below  WELCOME💒😎😎😒🔒');
        $this->session->set_flashdata('type', 'success');
				redirect($_SERVER['HTTP_REFERER'],'refresh');
		}
	}
}
