<?php

namespace App\Models;

use CodeIgniter\Model;

class InscripcionModel extends Model
{
    public function listado_profesiones_ocupaciones()
    {
        $builder = $this->db->table("pb_profesiones_ocupaciones");
        $builder->select('*');
        $builder->where("estado", 'REGISTRADO');
        return $builder->get()->getResultArray();
    }

    public function universidades_normales()
    {
        $builder = $this->db->table("pb_universidades_normales");
        $builder->select('*');
        $builder->where("estado", 'REGISTRADO');
        return $builder->get()->getResultArray();
    }

    public function buscar_persona_ci($ci)
    {
        $builder = $this->db->table("pb_persona as pe");
        $builder->select('*');
        $builder->join('pb_persona_grado_academico pga', 'pe.id_persona=pga.id_persona', 'left');
        $builder->where('pe.ci', $ci );
        return $builder->get()->getResultArray();
    }

    public function listado_programas($id = null)
    {
        $builder = $this->db->table("pb_view_programas");
        $builder->select('*');
        if($id != null){
            $builder->where('id_planificacion_programa', $id);
        }
        return $builder->get()->getResultArray();
    }

    public function listado_tipo_pago()
    {
        $builder = $this->db->table("pb_tipo_pago");
        $builder->select('*');
        return $builder->get()->getResultArray();
    }

    public function verificar_codigo_pago()
    {
        $builder = $this->db->table("pb_pago_programa");
        $builder->select('*');
        $builder->where('codigo_pago', '000001');
        $builder->where('estado_pago_programa', 'REGISTRADO');
        return $builder->get()->getResultArray();
    }
    
    public function get_id_last_codigo_pago()
    {
        $builder = $this->db->table("pago_programa");
        $builder->select('(codigo_pago+1) as codigo_pago');
        $builder->orderBy('id_pago_programa', 'DESC');
        $builder->limit(1);
        return $builder->get()->getResult();
    }

    public function verificarTabla($fila, $valor, $tabla, $descripcion)
    {   
        $builder = $this->db->table($tabla);
        $builder->select($descripcion);
        $builder->where($fila, $valor);
        return $builder->get()->getResultArray();
    }

}
