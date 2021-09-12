<?php

namespace App\Controllers;

use App\Models\Querys;

class Principal extends BaseController
{
	private $q;
	public function __construct()
	{
		parent::__construct();
		$this->q = new Querys();
	}

	public function index()
	{
		if (($this->q->seleccionarTabla('sesion', 'fecha_registro_sesion', ["date_format(fecha_registro_sesion, '%Y-%m-%d')" => date('Y-m-d'), 'id_usuario' => $this->data['user']['id_usuario']]))->getRowArray() == null) {
			var_dump($this->q->insertarTabla('sesion', [
				'id_usuario' => $this->data['user']['id_usuario'],
				'ip' => $this->request->getIPAddress(),
				'navegador' =>  $this->request->getUserAgent()->getBrowser(),
				'plataforma' => $this->request->getUserAgent()->getPlatform()
			]));
		}

		return $this->templater->view('principal');
	}
}
