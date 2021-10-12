<?php

namespace App\Controllers;

use App\Models\Querys;

class Principal extends BaseController
{

	public function index()
	{

		echo 'Time zone is: ' . date('e');
		echo 'Time zone is: ' . date_default_timezone_get();
		return;

		if (isset($this->data['user'])) {
			if (($this->q->seleccionarTabla(
				'sesion',
				'fecha_registro_sesion',
				[
					"date_format(fecha_registro_sesion, '%Y-%m-%d')" => date('Y-m-d'),
					'id_usuario' => $this->data['user']['id_usuario']
				]
			))->getRowArray() == null) {
				$this->q->insertarTabla('sesion', [
					'id_usuario' => $this->data['user']['id_usuario'],
					'ip' => nuloSiVacio($this->request->getIPAddress()),
					'navegador' => nuloSiVacio($this->request->getUserAgent()->getBrowser()),
					'plataforma' => nuloSiVacio($this->request->getUserAgent()->getPlatform()),
					'es_movil' => nuloSiVacio($this->request->getUserAgent()->isMobile()),
					'movil' => nuloSiVacio($this->request->getUserAgent()->getMobile())
				]);
			}

			$this->data['sesion'] = $this->q->seleccionar([], '', "*, concat(nombre,' ',paterno,' ',materno) as nombre_completo")->getResultArray();
			$this->data['cantidadPersonas'] = count($this->q->seleccionarTabla('persona')->getResultArray());

			return $this->templater->view('principal', $this->data);
		}
	}
}
