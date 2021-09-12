<?php

namespace App\Controllers;

use App\Libraries\SSP;
use App\Models\PersonalModel;

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
				$personal = new PersonalModel();
				$idPersona = $personal->insert([
					'ci' => $this->request->getPost('ci'),
					'expedido' => $this->request->getPost('expedido'),
					'paterno' => $this->nuloSiVacio($this->request->getPost('paterno')),
					'materno' => $this->nuloSiVacio($this->request->getPost('materno')),
					'nombre' => $this->nuloSiVacio($this->request->getPost('nombre')),
					'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento'),
					'genero' => $this->request->getPost('genero'),
					'estado_civil' => $this->request->getPost('estado_civil'),
					'domicilio' => $this->nuloSiVacio($this->request->getPost('domicilio')),
					'lugar_nacimiento' => $this->nuloSiVacio($this->request->getPost('lugar_nacimiento')),
					'correo' => $this->nuloSiVacio($this->request->getPost('correo')),
					'celular' => $this->request->getPost('celular'),
					'estado_persona' => 'REGISTRADO'
				]);
				return is_numeric($idPersona) ? $this->response->setJSON(['exito' => 'Persona agregada correctamente, ¿Desea agregarle algun permiso o usuario?']) : $this->response->setJSON(['error' => '¡Oh no ha ocurrido no error al agregar personal!']);
			} else {
				return $this->response->setJSON(['error' => $validation->listErrors()]);
			}
		}
	}
	public function nuloSiVacio($dato)
	{
		return is_null($dato) ? null : (empty($dato) ? null : trim($dato));
	}
}
