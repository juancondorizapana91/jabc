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
	public function ajaxListarPesonal()
	{
		// print_r($_REQUEST);
		$table = <<<EOT
        (SELECT p.*,u.*, gu.estado_grupo_usuario, g.nombre_grupo from pb_persona p 
		join pb_usuario u on p.id_persona = u.id_usuario
		join pb_grupo_usuario gu on gu.id_persona = u.id_usuario 
		join pb_grupo g on g.id_grupo = gu.id_grupo;
		) temp
        EOT;
		$primaryKey = 'id_materia_maestro';
		$where = "estado = 1 and gestion = " . date('Y');
		$columns = array(
			array('db' => 'id_materia_maestro', 'dt' => 0),
			array('db' => 'nivel', 'dt'            => 1),
			array('db' => 'materia', 'dt'            => 2),
			array('db' => 'nombre_completo', 'dt'    => 3),
			array('db' => 'gestion', 'dt'            => 4),
		);

		$sql_details = array('user' => $this->db->username, 'pass' => $this->db->password, 'db'   => $this->db->database, 'host' => $this->db->hostname);
		return $this->response->setJSON(json_encode(SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, $where)));
	}
}
