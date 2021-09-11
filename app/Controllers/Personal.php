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
			array('db' => 'ci', 'dt' => 1),
			array('db' => 'nombre', 'dt' => 2),
			array('db' => 'paterno', 'dt' => 3),
			array('db' => 'materno', 'dt' => 4),
			array('db' => 'fecha_nacimiento', 'dt' => 5),
			array('db' => 'genero', 'dt' => 6),
			array('db' => 'estado_civil', 'dt' => 7),
			array('db' => 'domicilio', 'dt' => 8),
			array('db' => 'correo', 'dt' => 9),
			array('db' => 'celular', 'dt' => 10),
			array('db' => 'lugar_nacimiento', 'dt' => 11),
		);

		$sql_details = array('user' => $this->db->username, 'pass' => $this->db->password, 'db'   => $this->db->database, 'host' => $this->db->hostname);
		return $this->response->setJSON(json_encode(SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns)));
	}
	public function guardarPersonal()
	{
		if ($this->request->isAJAX()) {
			$validation = \Config\Services::validation();
			if ($this->validate('validarPersonal')) {
			} else {
				return $this->response->setJSON(['error' => $validation->listErrors()]);
			}
		}
	}
}
