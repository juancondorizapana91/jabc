<?php

namespace App\Controllers;

use App\Models\Querys;

class Principal extends BaseController
{

	public function index()
	{
		// if (($this->q->seleccionarTabla('sesion', 'fecha_registro_sesion', ["date_format(fecha_registro_sesion, '%Y-%m-%d')" => date('Y-m-d'), 'id_usuario' => $this->data['user']['id_usuario']]))->getRowArray() == null) {
		// 	$this->q->insertarTabla('sesion', [
		// 		'id_usuario' => $this->data['user']['id_usuario'],
		// 		'ip' => $this->request->getIPAddress(),
		// 		'navegador' =>  $this->request->getUserAgent()->getBrowser(),
		// 		'plataforma' => $this->request->getUserAgent()->getPlatform(),
		// 		'es_movil' => $this->request->getUserAgent()->isMobile(),
		// 		'movil' => $this->request->getUserAgent()->getMobile()
		// 	]);
		// }

		return $this->templater->view('principal');
	}
}
