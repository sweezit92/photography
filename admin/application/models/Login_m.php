<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Login model class

*/

class Login_m extends CI_Model 
{
	public function check_login($username,$password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('admin_email', $username);
		$this->db->where('admin_password', $password);
		$query = $this->db->get();
		return $query->row();
	}
}
?>