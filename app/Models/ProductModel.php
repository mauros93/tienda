<?php namespace App\Models;

use CodeIgniter\Model;


class ProductModel extends Model
{
    protected $table      = 'producto';
    protected $primaryKey = 'id_producto';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['precio', 'marca', 'referencia', 'descripcion', 'cantidad', 'link_imagen'];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}