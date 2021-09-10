<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalModel extends Model
{
    protected $table = 'pb_persona';
    protected $primarykey = 'id_persona';
    protected $allowedFields = ['nombre', 'paterno'];
}
