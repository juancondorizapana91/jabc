<?php

namespace App\Controllers;

use App\Libraries\SSP;


class Personal extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		return $this->templater->view('personal/listarPersonal');
	}
	public function ajaxListarPersonal()
	{
		// print_r($_REQUEST);
		$table = <<<EOT
        (SELECT * from pb_persona) temp
        EOT;
		$primaryKey = 'id_persona';
		// $where = "estado = 1 and gestion = " . date('Y');
		$columns = array(
			array('db' => 'id_persona', 'dt' => 0),
			array('db' => 'ci', 'dt'            => 1),
			array('db' => 'nombre', 'dt'            => 2),
			array('db' => 'paterno', 'dt'    => 3),
			array('db' => 'materno', 'dt'            => 4),
		);

		$sql_details = array('user' => $this->db->username, 'pass' => $this->db->password, 'db'   => $this->db->database, 'host' => $this->db->hostname);
		return $this->response->setJSON(json_encode(SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns)));
	}
	public function guardarPersonal()
	{
		var_dump($_REQUEST);
	}
}
