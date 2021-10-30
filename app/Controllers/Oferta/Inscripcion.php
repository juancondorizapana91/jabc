<?php

namespace App\Controllers\Oferta;

use App\Controllers\BaseController;
use App\Models\InscripcionModel;
use App\Models\Querys;
use App\Libraries\Reporte_facturas;
use App\Libraries\Templater;

class Inscripcion extends BaseController
{
	protected $templater;
	protected $data = [];
	public function __construct()
	{
		$this->templater = new Templater(\Config\Services::request());
	}
	public function index()
	{

		return $this->templater->vistaOferta('oferta/inscripcion/formulario', $this->data);
	}
}
