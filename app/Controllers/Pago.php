<?php

namespace App\Controllers;

use App\Models\PagoModel;
use App\Models\Querys;
use App\Libraries\Ssp;

class Pago extends BaseController
{
	public $model = null;
	public $data = null;
	public $querys = null;

	public function __construct()
	{
		parent::__construct();
		$this->model = new PagoModel();
		$this->querys = new Querys();
	}

	public function index()
	{
		$this->data['profesiones_ocupaciones'] = $this->model->getProfesiones_ocupaciones();
		$this->data['universidades_normales'] = $this->model->getUniversity();
		return $this->templater->view('pago/index', $this->data);
	}

	public function buscar_persona()
	{
		$id_grado_academico = $this->request->getPost("id_grado_academico");
		$anio_titulacion = ($this->request->getPost("anio_titulacion") == '[TODOS]')? '':$this->request->getPost("anio_titulacion");
		$id_profesiones_ocupaciones = ($this->request->getPost("id_profesiones_ocupaciones") == '[TODOS]')? '':$this->request->getPost("id_profesiones_ocupaciones");
		$id_universidades_normales = ($this->request->getPost("id_universidades_normales") == '[TODOS]')?'':$this->request->getPost("id_universidades_normales");
		// var_dump($anio_titulacion, $id_profesiones_ocupaciones, $id_universidades_normales);

		$table = <<<EOT
		(SELECT 
			pp.id_persona,
			CONCAT_WS(' ', pp.paterno, pp.materno, pp.nombre)AS nombre,
			CONCAT_WS(' ', pp.ci, pp.expedido)AS ci,
			pp.fecha_nacimiento,
			pp.genero,
			pp.celular,
			pp.correo,
			pbc.gestion_titulacion,
			ppo.id_profesiones_ocupaciones,
			ppo.descripcion AS profesion,
			pun.id_universidades_normales,
			pun.nombre AS universidad,
			pun.tipo,
			pun.acronimo
		FROM pb_persona pp
		LEFT JOIN pb_persona_grado_academico pbc ON pp.id_persona = pbc.id_persona
		LEFT JOIN pb_profesiones_ocupaciones ppo ON ppo.id_profesiones_ocupaciones = pbc.id_profesiones_ocupaciones
		LEFT JOIN pb_universidades_normales pun ON pbc.id_universidades_normales = pun.id_universidades_normales
		WHERE pbc.gestion_titulacion like '%$anio_titulacion%'
		OR ppo.id_profesiones_ocupaciones like '%$id_profesiones_ocupaciones%'
		OR pun.id_universidades_normales like '%$id_universidades_normales%') temp
		EOT;

		$primaryKey = 'id_persona';
		$where = null;

        $columns = array(
            array('dt' => 0, 'db' => 'id_persona'),
            array('dt' => 1, 'db' => 'ci'),
            array('dt' => 2, 'db' => 'nombre'),
            array('dt' => 3, 'db' => 'fecha_nacimiento'),
            array('dt' => 4, 'db' => 'celular'),
            array('dt' => 5, 'db' => 'correo'),
				array('dt' => 6, 'db' => 'gestion_titulacion'),
				array('dt' => 7, 'db' => 'tipo'),
				array('dt' => 8, 'db' => 'universidad'),
				array('dt' => 9, 'db' => 'profesion'),
        );
        $sql_details = array(
            'driver' => $this->db->dbdriver,
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );

		$sql_details = array('user' => $this->db->username, 'pass' => $this->db->password, 'db'   => $this->db->database, 'host' => $this->db->hostname);
		return $this->response->setJSON(json_encode(SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, $where)));

	}

}