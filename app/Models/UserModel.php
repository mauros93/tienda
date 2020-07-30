<?php namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    protected $table      = 'usuario';
    protected $primaryKey = 'id_usuario';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['nombre', 'correo', 'telefono', 'correo', 'direccion'];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [
        'correo' => 'required|valid_email|is_unique[usuario.correo]'
    ];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}