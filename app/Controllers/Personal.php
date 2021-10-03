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
			// array('db' => 'nombre_usuario', 'dt' => 5),
			array('db' => 'fecha_nacimiento', 'dt' => 5),
			// array('db' => 'genero', 'dt' => 7),
			// array('db' => 'estado_civil', 'dt' => 7),
			// array('db' => 'domicilio', 'dt' => 8),
			array('db' => 'correo', 'dt' => 6),
			array('db' => 'celular', 'dt' => 7),
			// array('db' => 'lugar_nacimiento', 'dt' => 11),
		);

		$sql_details = array('user' => $this->db->username, 'pass' => $this->db->password, 'db'   => $this->db->database, 'host' => $this->db->hostname);
		return $this->response->setJSON(json_encode(SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns)));
	}
	public function guardarPersonal()
	{
		// return var_dump($_REQUEST);
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
					'id_usuario_registro' => $this->data['user']['id_persona'],
					'estado_persona' => 'REGISTRADO'
				]);
				return is_numeric($idPersona) ? $this->response->setJSON('Persona agregada correctamente, ¿Desea agregarle algun permiso o usuario?') : $this->response->setStatusCode(500)->setJSON(['error' => '¡Oh no ha ocurrido no error al agregar personal!']);
			} else {
				return $this->response->setStatusCode(500)->setJSON(['error' => $validation->listErrors()]);
			}
		}
	}
	public function editarPersonal($idPersona)
	{

		$persona = $this->q->seleccionarTabla('persona', '*', ['id_persona' => $idPersona])->getRowArray();
		if (is_null($persona)) {
			return $this->response->setStatusCode(500)->setJSON(['error' => '¡Oh no ha ocurrido un error al editar el personal!']);
		} else {
			return $this->response->setStatusCode(200)->setJSON($persona);
		}
	}
	public function nuloSiVacio($dato)
	{
		return is_null($dato) ? null : (empty($dato) ? null : trim($dato));
	}
}
