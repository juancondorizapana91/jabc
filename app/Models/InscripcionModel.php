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

    public function datosUsuario($condicion)
    {
        $builder = $this->db->table("persona p");
        $builder->select("CONCAT_WS(' ',s.denominacion_sede,o.direccion_oficina) oficina, s.denominacion_sede, o.celular_oficina, o.telefono_oficina,
        CONCAT_WS(' ' ,p.nombre,p.paterno,p.materno) usuario");
        $builder->join("personal psnl", "p.id_persona = psnl.id_usuario");
        $builder->join("oficina o", "psnl.id_oficina = o.id_oficina");
        $builder->join("sede s", "o.id_sede = s.id_sede");
        $builder->where($condicion);
        $query = $builder->get();
        // return var_dump($this->db->getLastQuery());
        return $query->getRowArray();
    }

    public function datosInscripcion($condicion)
    {
        $builder = $this->db->table('pago_programa pp');
        $builder->select("pp.fecha_creacion, pp.codigo_pago, CONCAT_WS(' ',p.nombre,p.paterno,p.materno) nombre, p.ci,
        CONCAT(ga.descripcion_grado_academico, ' EN ', pro.nombre_programa) nombre_programa, tp.descripcion_tipo_pago,  pla.costo_colegiatura,
        pla.costo_matricula, pp.monto_deposito, tp.id_tipo_pago");
        $builder->join("tipo_pago tp", "pp.id_tipo_pago = tp.id_tipo_pago");
        $builder->join("persona p", "pp.id_persona = p.id_persona");
        $builder->join("planificacion_programa pla", "pp.id_planificacion_programa = pla.id_planificacion_programa");
        $builder->join("programa pro", "pla.id_programa = pro.id_programa");
        $builder->join("grado_academico ga", "pla.id_grado_academico = ga.id_grado_academico");
        $builder->where($condicion);
        $query = $builder->get();
        return $query->getRowArray();
    }

}
