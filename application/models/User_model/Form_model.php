<?php
class Form_model extends CI_Model 
{
	function fetch_pass($session_id)
	{
	$fetch_pass=$this->db->query("select * from user_login where id='$session_id'");
	$res=$fetch_pass->result();
	}
	function change_pass($session_id,$new_pass)
	{
	$update_pass=$this->db->query("UPDATE user_login set pass='$new_pass'  where id='$session_id'");
	}
}