<?php

namespace App\Controllers;

use App\Models\PagoModel;
use App\Models\Querys;

class Pago extends BaseController
{
	public $model = null;
	public $data = null;
	public $querys = null;

	public function __construct()
	{
		parent::__construct();
		$this->model = new PagoModel();
		$this->querys = new Querys();
	}

	public function index()
	{
		return $this->templater->view('pago/index', $this->data);
	}

}