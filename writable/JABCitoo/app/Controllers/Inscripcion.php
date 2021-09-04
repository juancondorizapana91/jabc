<?php

namespace App\Controllers;

class Inscripcion extends BaseController
{
	public function index()
	{
		return $this->templater->view('inscripcion/index');
	}
}