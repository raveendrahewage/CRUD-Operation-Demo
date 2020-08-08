<?php 
	class models extends CI_Model
	{
		public function savedata($fName,$lName,$email,$phoNumber,$password)
		{
			$query="insert into users values('','$fName','$lName','$email','$phoNumber','$password')";
			$this->db->query($query);
		}

		public function displayusers()
		{
			$query=$this->db->query('select * from users');
			return $query->result();
		}

		public function deleteuser($id)
		{
			$this->db->query("delete from users where id='".$id."'");
		}

		public function displayuser($id)
		{
			$query=$this->db->query("select * from users where id='".$id."'");
			return $query->result();
		}

		public function updateuser($id,$fName,$lName,$email,$password)
		{
			$query=$this->db->query("update users SET fname='$fName',lName='$lName',email='$email',phoNumber='$phoNumber',password='$password' where id='".$id."'");
		}

		public function fetchUserDetails()
		{
			$query=$this->db->query('select * from users');

			$output='
			<table>
		      <thead>
		        <tr>
		          <th>ID</th>
		          <th>Name</th>
		          <th>E-mail</th>
		          <th>Phone Number</th>
		        </tr>
		      </thead>
		      <tbody>';
		    foreach ($query->result() as $row) 
		    {
		    	$output.='
		    	<tr>
	              <td>'.$row->id.'</td>
	              <td>'.$row->fName.' '.$row->lName.'</td>
	              <td>'.$row->email.'</td>
	              <td>'.$row->phoNumber.'</td>
	            </tr>';
		    }
		    $output.='
		   		</tbody>
    		</table>';
    		return $output;
		}
	}
 ?>