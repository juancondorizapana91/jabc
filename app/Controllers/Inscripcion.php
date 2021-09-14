<?php

namespace App\Controllers;

use App\Models\InscripcionModel;

class Inscripcion extends BaseController
{
	public $model = null;
	public $data = null;

	public function __construct()
	{
		parent::__construct();
		$this->model = new InscripcionModel();
	}

	public function index()
	{
		$this->data['profesiones_ocupaciones'] = $this->model->listado_profesiones_ocupaciones();
		$this->data['universidades_normales'] = $this->model->universidades_normales();
		$this->data['programas'] = $this->model->listado_programas();
		$this->data['tipo_pago'] =$this->model->listado_tipo_pago();
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
        if($respuesta != NULL)
        {
            $response = $this->inscripcion_model->get_id_last_codigo_pago();

            if(intval(trim($response[0]->id_transaccion)) >= 1 && intval(trim($response[0]->id_transaccion)) <= 9)
            {
                echo "00000" . intval($response[0]->id_transaccion);
            }elseif(intval(trim($response[0]->id_transaccion)) >= 10 && intval(trim($response[0]->id_transaccion)) <= 99)
            {
                echo "0000". intval(trim($response[0]->id_transaccion));
            }elseif(intval(trim($response[0]->id_transaccion)) >= 100 && intval(trim($response[0]->id_transaccion)) <= 999)
            {
                echo "000". intval(trim($response[0]->id_transaccion));
            }
            elseif(intval(trim($response[0]->id_transaccion)) >= 1000 && intval(trim($response[0]->id_transaccion)) <= 9999)
            {
                echo "00". intval(trim($response[0]->id_transaccion));
            }elseif(intval(trim($response[0]->id_transaccion)) >= 10000 && intval(trim($response[0]->id_transaccion)) <= 99999)
            {
                echo "0". intval(trim($response[0]->id_transaccion));
            }elseif(intval(trim($response[0]->id_transaccion)) >= 100000 && intval(trim($response[0]->id_transaccion)) <= 999999)
            {
                echo intval(trim($response[0]->id_transaccion));
            }

        }else{
            echo '000001';
        }

    }
}