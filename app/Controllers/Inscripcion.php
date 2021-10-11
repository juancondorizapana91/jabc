<?php

namespace App\Controllers;

use App\Models\InscripcionModel;
use App\Models\Querys;
use App\Libraries\Reporte_facturas;

class Inscripcion extends BaseController
{
	public $model = null;
	public $data = null;
	public $querys = null;

	public function __construct()
	{
		parent::__construct();
		$this->model = new InscripcionModel();
		$this->querys = new Querys();
	}

	public function index()
	{

		$this->data['profesiones_ocupaciones'] = $this->model->listado_profesiones_ocupaciones();
		$this->data['universidades_normales'] = $this->model->universidades_normales();
		$this->data['programas'] = $this->model->listado_programas();
		$this->data['tipo_pago'] = $this->model->listado_tipo_pago();
		$this->data['sede'] = null;
		// $this->data['sede'] = $this->model->datosUsuario(['p.id_persona' => (\Config\Services::session())->get('id_persona')])['denominacion_sede'];
		// return var_dump($this->data['sede'], (\Config\Services::session())->get('id_persona'));
		return $this->templater->view('inscripcion/index', $this->data);
	}

	public function buscar_persona_ci()
	{
		$ci = $this->request->getPost("ci");
		$data = $this->model->buscar_persona_ci($ci);
		return $this->response->setJSON(json_encode($data));
	}

	public function buscar_programa()
	{
		$id = $this->request->getPost('id');
		$data = $this->model->listado_programas($id);
		return $this->response->setJSON(json_encode($data));
	}

	public function subir_imagen_comprobante()
	{
	}

	public function numero_comprobante()
	{
		$respuesta = $this->model->verificar_codigo_pago();
		if ($respuesta != NULL) {
			$response = $this->model->get_id_last_codigo_pago();
			// return var_dump($response);
			if (intval(trim($response[0]->codigo_pago)) >= 1 && intval(trim($response[0]->codigo_pago)) <= 9) {
				echo "00000" . intval($response[0]->codigo_pago);
			} elseif (intval(trim($response[0]->codigo_pago)) >= 10 && intval(trim($response[0]->codigo_pago)) <= 99) {
				echo "0000" . intval(trim($response[0]->codigo_pago));
			} elseif (intval(trim($response[0]->codigo_pago)) >= 100 && intval(trim($response[0]->codigo_pago)) <= 999) {
				echo "000" . intval(trim($response[0]->codigo_pago));
			} elseif (intval(trim($response[0]->codigo_pago)) >= 1000 && intval(trim($response[0]->codigo_pago)) <= 9999) {
				echo "00" . intval(trim($response[0]->codigo_pago));
			} elseif (intval(trim($response[0]->codigo_pago)) >= 10000 && intval(trim($response[0]->codigo_pago)) <= 99999) {
				echo "0" . intval(trim($response[0]->codigo_pago));
			} elseif (intval(trim($response[0]->codigo_pago)) >= 100000 && intval(trim($response[0]->codigo_pago)) <= 999999) {
				echo intval(trim($response[0]->codigo_pago));
			}
		} else {
			echo '000001';
		}
	}

	public function verificarTabla()
	{
		$fila = $this->request->getPost('fila');
		$valor = $this->request->getPost('valor');
		$tabla = $this->request->getPost('tabla');
		$descripcion = $this->request->getPost('descripcion');

		$response = $this->model->verificarTabla($fila, $valor, $tabla,  $descripcion);
		// var_dump($this->db->getLastQuery());
		echo $response[0][$descripcion];
	}

	public function guardarInscripcion()
	{
		// Verificar el registro de la persona
		$validation =  \Config\Services::validation();
		$response = $this->model->buscar_persona_ci(trim($this->request->getPost('ci')));
		$registrar_persona = false;

		if (count($response) > 0) {
			// Solo registrar pago
			$registrar_persona = false;
		} else {
			// Registrar persona y el pago
			$registrar_persona = true;
		}

		$id_persona1 = null;

		if ($registrar_persona) {

			$validation->setRules([
				'ci' => ['label' => 'carnet de identidad', 'rules' => 'required'],
				'expedido' => ['label' => 'expedido', 'rules' => 'required'],
				'nombre' => ['label' => 'nombre', 'rules' => 'required'],
				'paterno' => ['label' => 'código pago', 'rules' => 'required'],
				'fecha_nacimiento' => ['label' => 'fecha nacimiento', 'rules' => 'required'],
				'celular' => ['label' => 'fecha depósito', 'rules' => 'required'],
				'genero' => ['label' => 'fecha depósito', 'rules' => 'required'],
				'id_profesiones_ocupaciones' => ['label' => 'fecha depósito', 'rules' => 'required'],
				'id_universidades_normales' => ['label' => 'fecha depósito', 'rules' => 'required'],
				'tipo_universidad' => ['label' => 'fecha depósito', 'rules' => 'required'],
				'gestion_titulacion' => ['label' => 'fecha depósito', 'rules' => 'required']
			]);

			$data3 = array(
				'ci' => $this->request->getPost('ci'),
				'expedido' => $this->request->getPost('expedido'),
				'nombre' => trim(strtoupper($this->request->getPost('nombre'))),
				'paterno' => trim(strtoupper($this->request->getPost('paterno'))),
				'materno' => trim(strtoupper($this->request->getPost('materno'))),
				'fecha_nacimiento' => $this->request->getPost('fecha_nacimiento'),
				'celular' => trim($this->request->getPost('celular')),
				'genero' => $this->request->getPost('genero'),
				'estado_persona' => "REGISTRADO",
				'fecha_registro' => date("Y-m-d H:i:s"),
			);

			if (!$validation->withRequest($this->request)->run()) {
				return $this->response->setJSON(['error' => $validation->listErrors()]);
			} else {
				// Insert pago programa
				$id = $this->querys->insertarTabla("persona", $data3);
				if (is_numeric($id)) {
					// insertar persona grado académico
					$data4 = array(
						'id_persona' => $id,
						'id_profesiones_ocupaciones' => $this->request->getPost('id_profesiones_ocupaciones'),
						'id_universidades_normales' => $this->request->getPost('id_universidades_normales'),
						'tipo_universidad' => $this->request->getPost('tipo_universidad'),
						'gestion_titulacion' => $this->request->getPost('gestion_titulacion'),
					);

					$id_persona_grado_academico = $this->querys->insertarTabla("persona_grado_academico", $data4);

					if (is_numeric($id_persona_grado_academico)) {
						$id_persona1 = $id;
					}
				}
			}
		}

		$id_persona = ($this->request->getPost('id_persona') == NULL) ? $id_persona1 : $this->request->getPost('id_persona');
		// Registro de pago programa
		$validation->setRules([
			'nombre_programa' => ['label' => 'programa', 'rules' => 'required'],
			'id_tipo_pago' => ['label' => 'tipo pago', 'rules' => 'required'],
			'codigo_pago' => ['label' => 'código pago', 'rules' => 'required'],
			'monto_pago' => ['label' => 'monto pago', 'rules' => 'required'],
			'fecha_deposito' => ['label' => 'fecha depósito', 'rules' => 'required'],
		]);

		$data1 = array(
			'id_persona' => $id_persona,
			'id_planificacion_programa' => $this->request->getPost('nombre_programa'),
			'id_tipo_pago' => $this->request->getPost('id_tipo_pago'),
			'codigo_pago' => $this->request->getPost('codigo_pago'),
			'monto_deposito' => trim($this->request->getPost('monto_pago')),
			'fecha_deposito' => $this->request->getPost('fecha_deposito'),
			'descripcion_pago' => $this->request->getPost('descripcion_pago'),
			'observacion' => $this->request->getPost('observacion_pago'),
			'fecha_creacion' => date("Y-m-d H:i:s"),
		);

		if (!$validation->withRequest($this->request)->run()) {
			return $this->response->setJSON(['error' => $validation->listErrors()]);
		} else {
			// Insert pago programa
			$id_pago_programa = $this->querys->insertarTabla("pago_programa", $data1);
			if (is_numeric($id_pago_programa)) {
				// insertar imagen comprobante si existe
				if ($this->request->getPost('comprobante') != null) {
					$ruta = '';
					if ($this->request->getPost('comprobante')) {
						if (preg_match('/^data:image\/(\w+);base64,/', $this->request->getPost('comprobante'), $formato)) {
							$imagen = substr($this->request->getPost('comprobante'), strpos($this->request->getPost('comprobante'), ',') + 1);
							$nombre = $id_pago_programa . "_" . date('Y_m_d_H_i_s') . '.' . strtolower($formato[1]);
							$ruta = 'img/comprobante_pago/' . $nombre;
							$extension = getimagesize($this->request->getPost('comprobante'))['mime'];
							$size = (int) (strlen(rtrim($this->request->getPost('comprobante'), '=')) * 3 / 4);
							file_put_contents(FCPATH . 'img/comprobante_pago/' . $nombre, base64_decode($imagen));

							$data2 = array(
								'nombre_archivo' => $nombre,
								'extension_archivo' => $extension,
								'tamano_archivo' => $size,
								'ruta_archivo' => $ruta,
								'etiqueta' => "PAGO PROGRAMA",
								'id_usuario' => 1
							);

							$id_multimedia = $this->querys->insertarTabla("multimedia", $data2);

							if (is_numeric($id_multimedia)) {
								$id_multimedia_pago_programa = $this->querys->insertarTabla('multimedia_pago_programa', [
									'id_multimedia' => $id_multimedia,
									'id_pago_programa' => $id_pago_programa,
									'id_usuario' => 1
								]);

								if (is_numeric($id_multimedia_pago_programa)) {
									return $this->response->setJSON(['exito' => "Pago programa registrado correctamente", 'id_pago_programa' => $id_pago_programa]);
								}
							}
						}
					}
				}

				return $this->response->setJSON(['exito' => "Pago programa registrado correctamente", 'id_pago_programa' => $id_pago_programa]);
			} else {
				return $this->response->setJSON(['error' => "Error al registrar el pago programa"]);
			}
		}
	}

	public function generarFactura()
	{

		$id_usuario = (\Config\Services::session())->get('id_persona');
		$datos = $this->model->datosInscripcion(['pp.id_pago_programa' => $this->request->getGet('id')]);  // $id_pago_programa
		$datos = array_merge($datos, $this->model->datosUsuario(['p.id_persona' => $id_usuario]));
		$this->response->setContentType('application/pdf');
		$reporte_facturas = new Reporte_facturas();
		return $reporte_facturas->facturaLg($datos);
	}
}
