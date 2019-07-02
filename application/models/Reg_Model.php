<?php

class Reg_Model extends CI_Model{

          // saverecords method
	 function saverecords($name,$email,$username,$password)
	{
		$query = "insert into registration values('','$name','$email','$username','$password')";
        $this->db->query($query);
      
		
	}   
          //display method
	function displayrecords()
	{
		$query=$this->db->query("select * from registration");
		return $query->result();
	}
         //delete method
	function deleterecords($id)
	{
		$this->db->query("delete  from registration where id='".$id."'");
	}

           //display data method
    function displayrecordsById($id)
    {
        $query=$this->db->query("select *from registration where id='".$id."'");
            return $query->result();
    }
           
           // update method
	function updaterecords($name,$email,$username,$password,$id)
	{
		$query=$this->db->query("update registration SET name ='$name',email='$email',username='$username',password='$password' where id='".$id."'");
	}

	 
	
 }

?>