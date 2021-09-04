<?php

namespace App\Controllers;

class Principal extends BaseController
{
	public function index()
	{
		return $this->templater->view('principal');
	}
}
