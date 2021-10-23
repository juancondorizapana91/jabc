<?php

namespace App\Libraries;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;

class Templater extends BaseController
{
    public $request = null;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    function view($content, $data = [], $base = "base")
    {
        if ($this->request->isAJAX()) {
            $ajax = view($content, $data);
            return css_tag($content) . $ajax . script_tag($content);
        } else {
            $data['menu'] = view('menu', $data);
            $data['header'] = view('header', $data);
            $data['content'] = view($content, $data);
            $data['footer'] = view('footer', $data);
            return view($base, $data);
        }
    }
    function vistaOferta($content, $data = [], $base = "oferta/base_oferta")
    {
        if ($this->request->isAJAX()) {
            $ajax = view($content, $data);
            return css_tag($content) . $ajax . script_tag($content);
        } else {
            $data['menu'] = view('oferta/menu', $data);
            $data['contenido'] = view($content, $data);
            $data['pie'] = view('oferta/pie', $data);
            return view($base, $data);
        }
    }
    function login()
    {
        echo view('login');
    }
}
