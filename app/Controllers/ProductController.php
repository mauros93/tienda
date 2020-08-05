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
        $busqueda = $this->request->getPost('buscar');
        $productos = $producto->where('marca', $busqueda)->findAll();  
        // print_r($productos);      
        if(count($productos) == 0){
                $productos = $producto->where('referencia', $busqueda)->findAll();  
                print_r($productos);
                if(count($productos) == 0){
                        print_r($productos);
                        return view('index1');
                }             
        };
        
        $productos = ['productos' => $productos];
        print_r($productos);
        return view('index', $productos);
        // return redirect()->to(base_url('public/ProductController'));
        } 


        function vistaIngresarProducto(){
                $producto = new ProductModel();
                $productos = ['productos' => $producto->findAll()];
                return view('ingresarProducto', $productos);
        }


        function ingresarProducto(){
                $producto = new ProductModel();
                $precio = $this->request->getPost('precio');
                $marca = $this->request->getPost('marca');
                $referencia = $this->request->getPost('referencia');
                $descripcion = $this->request->getPost('descripcion');
                $cantidad = $this->request->getPost('cantidad');
                $link_imagen = $this->request->getPost('link_imagen');
                $datosProducto = ['precio' => $precio, 'marca' => $marca, 'referencia' => $referencia, 'descripcion' => $descripcion,'cantidad' => $cantidad, 'link_imagen' => $link_imagen];
                // if($producto->save($datosProducto) === false){
                //         print_r ($producto->errors());   
                // }
                $producto->save($datosProducto);
                print_r($datosProducto);
                $productos = ['productos' => $producto->findAll()];
                return view('ingresarproducto', $productos);
        }



        function eliminarProducto($id){
                $producto = new ProductModel();
                $producto->delete($id);
                $productos = ['productos' => $producto->findAll()];                
                return view('ingresarProducto', $productos);
                

        }


        function actualizarProducto($id){
                $producto = new ProductModel();
                $marca = $this->request->getPost('marca');
                $referencia = $this->request->getPost('referencia');
                $precio = $this->request->getPost('precio');
                $cantidad = $this->request->getPost('cantidad');
                $descripcion = $this->request->getPost('descripcion');
                $datos = ['marca' => $marca, 'referencia' => $referencia, 'precio' => $precio, 'cantidad' => $cantidad, 'descripcion' => $descripcion];
                $producto->update($id, $datos);
                $productos = ['productos' => $producto->findAll()];
                
                return view('ingresarproducto', $productos);
                
        }


        public function iniciarSesion(){
                $producto = new ProductModel();
                $usuario = new UserModel();
                $correo = $this->request->getPost('correo');
                $contraseña = $this->request->getPost('contraseñaUsuario');
                // echo $correo . "  " . $contraseña;
                print_r($usuario->errors());
                $usuario = $usuario->where('correo', "$correo")->findAll();
                if(count($usuario) == 0){
                        echo 'El correo no se encuentra registrado';
                }
                else{
                        if($usuario[0]['contraseña'] == $contraseña){
                        echo $usuario['contraseña'];
                        echo "Bienvenido ". $usuario[0]['nombre'];                        
                        $productos = ['productos' => $producto->findAll()];
                
                        return view('index', $productos);
                        }
                        else{
                        echo "Contraseña erronea";
                        }
                }  

        }

        public function vistaIniciarSesion(){
                return view('inicioSesionUsuario');
    
	}
}