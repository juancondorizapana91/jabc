<?php

namespace App\Controllers;

use App\Models\Querys;

class Principal extends BaseController
{

	public function index()
	{
		if (isset($this->data['usuario'])) {
			if (($this->q->seleccionarTabla(
				'sesion',
				'fecha_registro_sesion',
				[
					"date_format(fecha_registro_sesion, '%Y-%m-%d')" => date('Y-m-d'),
					'id_usuario' => $this->data['usuario']['id_usuario']
				]
			))->getRowArray() == null) {
				$this->q->insertarTabla('sesion', [
					'id_usuario' => $this->data['usuario']['id_usuario'],
					'ip' => nuloSiVacio($this->request->getIPAddress()),
					'navegador' => nuloSiVacio($this->request->getUserAgent()->getBrowser()),
					'plataforma' => nuloSiVacio($this->request->getUserAgent()->getPlatform()),
					'es_movil' => nuloSiVacio($this->request->getUserAgent()->isMobile()),
					'movil' => nuloSiVacio($this->request->getUserAgent()->getMobile()),
					'fecha_registro_sesion' => date('Y-m-d H:i:s')
				]);
			}

			$this->data['sesion'] = $this->q->seleccionar([], '', "*, concat(nombre,' ',paterno,' ',materno) as nombre_completo")->getResultArray();
			$this->data['cantidadPersonas'] = count($this->q->seleccionarTabla('persona')->getResultArray());
			$this->data['cantidadInscripciones'] = count($this->q->seleccionarTabla('pago_programa')->getResultArray());
			$this->data['cantidadProgramas'] = count($this->q->seleccionarTabla('programa')->getResultArray());
			// $this->data['pagosPrograma'] = $this->q->recaudacionPorPrograma([], 'pp.id_planificacion_programa DESC', 'p.id_programa, p.nombre_programa, round(IFNULL(sum(monto_deposito),0),2) as monto, descripcion_grado_academico, gestion, proper(denominacion_sede) as denominacion_sede', 'pp.id_planificacion_programa')->getResultArray();
			// var_dump($this->data['pagosPrograma']);
			return $this->templater->view('principal', $this->data);
		}
	}
}
