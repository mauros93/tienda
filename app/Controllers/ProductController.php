<?php namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\UserModel;

class ProductController extends BaseController
{
        public function __construct()
        {
        helper('form');
        }

	public function index()
	{
        $producto = new ProductModel();
        $datos = ['productos' => $producto->findAll()];
        return view('index', $datos);        
	}

        function buscar()
        {
        $producto = new ProductModel();
        // $marca = $this->request->getPost('buscar');
        $productos = $producto->where('marca', $this->request->getPost('buscar'))->findAll();
        $busqueda = $this->request->getPost('buscar');
        
        
        if(count($productos) == 0){
                $productos = $producto->where('referencia', "$busqueda")->findAll();                
        };
        print_r($productos);
        $productos = ['productos' => $productos];
        return view('index', $productos);
        // return redirect()->to(base_url('public/ProductController'));
        } 

        
}
