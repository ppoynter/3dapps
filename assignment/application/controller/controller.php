<?php
class Controller {

	public $load;
	public $model;
	public $adminLoggedIn;

	
	function __construct($pageMethod = null)
	{
		$this->adminLoggedIn = FALSE;
		$this->load = new Load();
		$this->model = new Model();
		$this->$pageMethod();
	}
	
    function home()
	{
		$this->apiHome();
	}

	//Checks to see if the right password is inputted
	function adminCheck() {
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if(isset($_REQUEST['submit_pass']) && $_REQUEST['pass'])
			{
     			$pass=$_REQUEST['pass'];
     			if($pass=="password")
     			{
          			$this->adminLoggedIn = TRUE;
     			}
			}
		} 
	}

	//different CRUD methods for updating the data
	function apiCreateTables()
	{
		$this->adminCheck();
		if($this->adminLoggedIn == TRUE) 
		{

			$data = $this->model->dbCreateTables();
			$this->load->view('viewMessage', $data);
		} 
		else
		{
			$this->load->view('admin');
		}
	}
		
	 function apiInsertData()
	{
		$this->adminCheck();
		if($this->adminLoggedIn == TRUE) 
		{
			$data = $this->model->dbInsertData();
	   		$this->load->view('viewMessage', $data);
		}
		else
    	{
			$this->load->view('admin');
   	 	}
	}  

	function apiDeleteData()
	{
		$this->adminCheck();
		if($this->adminLoggedIn == TRUE) 
		{
			$data = $this->model->dbDeleteData();
			$this->load->view('viewMessage', $data);
		}
		else
		{
			$this->load->view('admin');
		}
	}

	function apiHome()
	{
		$this->load->view('mainView');	
	}

	function apiGetSiteData()
	{
		$data = $this->model->dbGetCokeData();
		$data1 = $this->model->dbGetSectionData();
		$result = json_encode($data + $data1);
		echo $result;
	}  	  		
}
?>    