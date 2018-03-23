<?php
namespace app\Controller;

use app\Model\adminModel;

class indexController extends \core\core
{
	public function index()
	{		

		$model = new adminModel();
		$users = $model->all();

		$data = 'this is view';
		$this->display('index.index',[
			'data' => $data,
			'user' => $users
		]);
	}
}