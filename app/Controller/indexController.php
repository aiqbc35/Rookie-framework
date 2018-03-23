<?php
namespace app\Controller;

use app\Model\adminModel;
use core\lib\Log;

class indexController extends \core\core
{
	public function index()
	{		

		$model = new adminModel();
		$users = $model->all();

		$test = Log::info('this is Log test');
		$data = 'this is view';
		$this->display('index.index',[
			'data' => $data,
			'user' => $users
		]);
	}
}