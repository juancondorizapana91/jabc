<?php

namespace App\Models;

use CodeIgniter\Database\Database;

class Querys extends Database
{
    public $db = null;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function vistaUsuario($condicion = null, $busqueda = null)
    {
        $builder = $this->db->table('view_users');
        if (is_array($condicion)) {
            return $builder->getWhere($condicion)->getResultArray();
        } else {
            return $builder->get()->getResultArray();
        }
    }

    public function verificarUsuario($condition)
    {
        $builder = $this->db->table('view_users');

        if (is_array($condition)) {
            $builder->where($condition);
            $builder->where('estado_grupo_usuario', 'ACTIVO');
            return $builder->get();
        } else {
            return null;
        }
    }
    public function insertarTabla($tabla, $datos)
    {
        $builder = $this->db->table($tabla);
        return $builder->insert($datos) ? $this->db->insertID() : $this->db->error();
    }
    public function seleccionarTabla($tabla, $campos = '*', $condicion = [], $orden = '', $agrupar = '')
    {
        $builder = $this->db->table($tabla);
        $builder->select($campos);
        empty($orden) ?: $builder->orderBy($orden);
        empty($agrupar) ?: $builder->groupBy($agrupar);

        return empty($condicion) ? $builder->get() : $builder->getWhere($condicion);
    }
    public function verificarRol($condition)
    {
        $builder = $this->db->table('pb_view_users');
        if (is_array($condition)) {
            $builder->select("GROUP_CONCAT(nombre_grupo) AS nombre_grupo");
            $builder->where($condition);
            $builder->where('estado_grupo_usuario', 'ACTIVO');
            return $builder->get();
        } else {
            return null;
        }
    }
    public function seleccionar($condicion = [], $orden = '', $columna = '*')
    {
        $builder = $this->db->table('sesion s');
        $builder->orderBy($orden);
        $builder->select($columna);
        $builder->join('usuario u', 'u.id_usuario = s.id_usuario');
        $builder->join('persona p', 'p.id_persona = u.id_usuario');

        return empty($condicion) ? $builder->get() : $builder->getWhere($condicion);
    }

    public function recaudacionPorPrograma($condicion = [], $orden = '', $columna = '*', $agrupar = '')
    {
        $builder = $this->db->table('programa p');
        empty($orden) ?: $builder->orderBy($orden);
        $builder->select($columna);
        $builder->join('view_programas pp', 'pp.id_programa = p.id_programa');
        $builder->join('pago_programa pp2', 'pp2.id_planificacion_programa = pp.id_planificacion_programa', 'left');
        empty($agrupar) ?: $builder->groupBy($agrupar);

        return empty($condicion) ? $builder->get() : $builder->getWhere($condicion);
    }
}
