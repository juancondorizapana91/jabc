<?php 
namespace App\Controllers;
use App\Libraries\Reporte_facturas;
use App\Libraries\GeneradorQR;

class Facturas extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

	public function generarFactura()
	{
		$this->response->setContentType('application/pdf');
		$reporte_facturas = new Reporte_facturas();
		$reporte_facturas->facturaLg();
	}

	public function generarqr()
	{
		$qr = new GeneradorQR();
		$qr->generar_qr();
	}
}