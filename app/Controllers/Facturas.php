<?php 
namespace App\Controllers;
use App\Libraries\Reporte_facturas;

class Facturas extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

	public function generarFactura()
	{
		$this->load->library('reporte_facturas');
		$reporte_facturas = new Reporte_facturas();
		$reporte_facturas->facturaLg();
	}
}