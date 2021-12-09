<?php

namespace App\Controllers;

use App\Libraries\Templater;
use App\Models\Querys;
use CodeIgniter\Controller;

class Auth extends Controller
{
	protected $helpers = ['Pb'];
	protected $db = null;
	function __construct()
	{
		$this->templater = new Templater(\Config\Services::request());
		$this->session = \Config\Services::session();
		$this->querys = new Querys();
		$this->db = \Config\Database::connect();
	}


	public function login()
	{
		if (autentificado()) {
			return redirect()->to(base_url('/principal'));
		} else {
			$this->templater->login();
		}
	}


	public function authenticate($user, $password)
	{
		$userSearched = $this->querys->vistaUsuario(['nombre_usuario' => trim($user), 'clave_usuario' => md5(trim($password))]);

		// var_dump($this->db->getLastQuercmy());
		// return var_dump($userSearched);
		if (count($userSearched) >= 1) {
			$this->session->set(['id_persona' => $userSearched[0]['id_persona']]);
			$this->session->set(['nombre_grupo' => $userSearched[0]['nombre_grupo']]);
			return $this->response->setJSON(['success' => true]);
		}
		#Si $userSearched no es igual a 1 debemos devolverlo al mismo login
		else {
			$this->session->destroy();
			return $this->response->setJSON(['error' => false]);
		}
	}
	public function access()
	{
		$this->session->set(['nombre_grupo' => $this->request->getPost('nombre_grupo')]);
		return redirect()->to(base_url('/principal'));
	}
	// funcion para cerrar sesion
	public function cerrarSesion()
	{
		$this->session->destroy();
		return redirect()->to(base_url('/'));
	}
}// class
