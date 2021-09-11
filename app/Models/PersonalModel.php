<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalModel extends Model
{
    protected $table = 'pb_persona';
    protected $primarykey = 'id_persona';
    protected $allowedFields = [
        'ci',
        'expedido',
        'nombre',
        'paterno',
        'materno',
        'fecha_nacimiento',
        'genero',
        'estado_civil',
        'domicilio',
        'correo',
        'celular',
        'lugar_nacimiento',
    ];
}
