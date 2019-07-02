<?php

class CTRL_Registration extends CI_Controller{

		
	public function index()
	{
        $this->load->view('home');

		


		// load database libray manually
		$this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
		//load model
		$this->load->model('Reg_Model'); 
	}

	public function savedata()
    {
    	
    	//check submit button
        if($this->input->post('save'))
        {

    			
        	//get form's data and store in local variable

        	$n = $this->input->post('name');
        	$e = $this->input->post('email');
            $u = $this->input->post('username');
        	 $p = $this->input->post('password');


        	//call save records method of Reg_Model and pass variable as parameter

        	$this->Reg_Model->saverecords($n,$e,$u,$p);
           
           $data['error']="<h3 style='color:blue'>Registration successfully</h3>";
             $this->load->view('home',@$data);
        	
        	
        }
        else{

        $this->load->view('header');
        $this->load->view('fotter');
        $this->load->view('registration');
        }
    }
          // display function
    public function displaydata()
    {
    	$result['data']=$this->Reg_Model->displayrecords(); // call displayrecords
        $this->load->view('header');
        $this->load->view('fotter'); 
        $this->load->view('display_records',$result);
    }

         // delete function
    public function deletedata()
    {
    	$id=$this->input->get('id');
    	$this->Reg_Model->deleterecords($id);  //call deleterecords method of Reg_Model and pass variable as parameter
    	 $this->load->helper('url');
    	redirect("CTRL_Registration/displaydata");
    }
          //update function
    public function updatedata()
    {   
    	$id=$this->input->get('id');
    	$result['data']=$this->Reg_Model->displayrecordsById($id);  //call displayrecordsById method of Reg_Model and pass variable as parameter
    	$this->load->view('update_records',$result);

        // check update botton
    	if($this->input->post('update'))
    	{
    		$n = $this->input->post('name');
            $e = $this->input->post('email');
            $u = $this->input->post('username');
            $p = $this->input->post('password');
           

    		$this->Reg_Model->updaterecords($n,$e,$u,$p,$id); //call updaterecords method of Reg_Model and pass variable as parameter
    		$this->load->helper('url');
              $data['error']="<h3 style='color:blue'>Upadate successfully</h3>";
             $this->load->view('home',@$data);
    		// redirect("CTRL_Registration/displaydata");
    	}
    
           
     }    // login function 
    public function login()
    {   
    	   

    	if($this->input->post('login'))
    	{
                  
    		  //get login form's data and store in local variable
            $u = $this->input->post('username');
            $p = $this->input->post('password');
           
              // check username password
    		$query=$this->db->query("select *from registration where username ='".$u."'and password='$p'");
    		$row=$query->num_rows();

    		if($row)
    		{     
                  $data['error']="<h3 style='color:blue'>Login successfully</h3>";
            
            $this->load->view('home',@$data); 
                
    		}
    		else
    		{    $data['error']="<h3 style='color:blue'>Invalid Login details</h3>";
            $this->load->view('home',@$data); 
               

    		}	
    	}

        else{
            $this->load->view('header');
            $this->load->view('fotter');
            $this->load->view('login');
        }
        
          
    }

   


}

?>