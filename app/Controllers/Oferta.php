<?php

namespace App\Controllers;

use App\Libraries\Templater;
use CodeIgniter\Controller;

class Oferta extends Controller
{
    protected $templater;
    protected $data = [];
    public function __construct()
    {
        $this->templater = new Templater(\Config\Services::request());
    }
    function index()
    {
        return $this->templater->vistaOferta('oferta/inicio', $this->data);
    }
}
