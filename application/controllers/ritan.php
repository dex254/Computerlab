<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ritan extends CI_Controller {

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
		$data['ritan'] = $this->lab_model->get_all_data('ritan');


    $this->load->view('common/header',$ndata);


    $this->load->view('ritan/index',$data);
		$this->load->view('common/footer');
	}


public function create()
	{
    $data = array('id' => '');
    $data['attributes'] = array('class' => 'form');
    $data['prop'] = array('class' => 'form-control');
		$resulta = $this->lab_model->get_all_data('dennis');
				      foreach ($resulta as $rowa)
				  		{
				  			$rida = $rowa['name'];
				  			$dropdowna [$rida] = $rowa['name'];
				  		}
				  		$data['dennis'] = $dropdowna;

				$resultb = $this->lab_model->get_all_data('borrow');
				      foreach ($resultb as $rowb)
				  		{
				  			$ridb = $rowb['serial'];
				  			$dropdownb [$ridb] = $rowb['serial'];
				  		}
				  		$data['borrow'] = $dropdownb;

    $ndata['login']=$this->session_data;

    $this->load->view('common/header',$ndata);

    $this->load->view('ritan/create',$data);
    $this->load->view('common/footer');
	}

  public function store()
	{
    $this->load->library('form_validation');
		$this->load->helper(array('form'));

    $this->form_validation->set_rules('date', 'Date of retarn', 'trim|required|date');
		$this->form_validation->set_rules('name', 'Borrowes   Name', 'required');
		$this->form_validation->set_rules('serial', 'condition of item', 'required');
		$this->form_validation->set_rules('conde', 'condition of the item', 'required');
		$this->form_validation->set_rules('phone', 'castomer Contacts', 'required');
		$this->form_validation->set_rules('names', 'borrowwes name', 'required');
    if ($this->form_validation->run() === FALSE)
		{
			$this->create();
		}
    else
		{
  	  	$dataritan = array(
					'date' => $this->input->post('date'),
					'name' => $this->input->post('name'),
					'serial' => $this->input->post('serial'),
					'conde' => $this->input->post('conde'),
					'phone' => $this->input->post('phone'),
					'names' => $this->input->post('names'),

          'regBy' => $this->session_data['loggedId']

					);
        $userRegId=$this->lab_model->insert_data('ritan', $dataritan);
				$this->session->set_flashdata('message', '😒🤬You have successfully    recived a new Product to database 👮‍♂️👮‍♂️🥷   you can view contents from the view 🍎🍎below  WELCOME💒😎😎😒🔒');
        $this->session->set_flashdata('type', 'success');
				redirect($_SERVER['HTTP_REFERER'],'refresh');
		}
	}
}
