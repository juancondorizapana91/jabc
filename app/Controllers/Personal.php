<?php

namespace App\Controllers;

use App\Models\PersonalModel;

class Personal extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		return $this->templater->view('personal/listarPersonal');
		$this->data['nombre'] = "edwin";
		$this->data['paterno'] = "alanoca";
	}
	public function crear()
	{
		$personal = new PersonalModel();
		$personal->insert([
			'nombre' => $this->request->getPost('nombre'),
			'paterno' => $this->request->getPost('paterno'),

		]);
	}
}
