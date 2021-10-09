<?php

namespace App\Models;

use CodeIgniter\Model;

class PagoModel extends Model
{
    
    public function getProfesiones_ocupaciones()
    {
        $builder = $this->db->table("pb_profesiones_ocupaciones");
        $builder->select('*');
        $builder->where("estado", 'REGISTRADO');
        return $builder->get()->getResultArray();
    }

    public function getUniversity() 
    {
        $builder = $this->db->table("universidades_normales");
        $builder->select('*');
        $builder->where("estado", 'REGISTRADO');
        return $builder->get()->getResultArray();
    }

}
