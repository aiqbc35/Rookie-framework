<?php
namespace app\Model;

use core\lib\model;

class adminModel extends model
{

	private $table = 'admin';

	public function all()
	{
		$users = $this->db->table('admin')->get();
		return $users;
	}


}