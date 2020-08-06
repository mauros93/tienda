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
                if(count($productos) == 0){
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
                $marca = ucfirst($this->request->getPost('marca'));
                $referencia = ucfirst($this->request->getPost('referencia'));
                $descripcion = ucfirst($this->request->getPost('descripcion'));
                $cantidad = $this->request->getPost('cantidad');
                $link_imagen =  $this->request->getPost('link_imagen');
                $datosProducto = ['precio' => $precio, 'marca' => $marca, 'referencia' => $referencia, 'descripcion' => $descripcion,'cantidad' => $cantidad, 'link_imagen' => $link_imagen];
                // if($producto->save($datosProducto) === false){
                //         print_r ($producto->errors());   
                // }
                $producto->save($datosProducto);                
                $productos = ['productos' => $producto->orderBy('id_producto', 'DESC')->findAll()];
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
                $marca = ucfirst($this->request->getPost('marca'));
                $referencia = ucfirst($this->request->getPost('referencia'));
                $precio = $this->request->getPost('precio');
                $cantidad = $this->request->getPost('cantidad');
                $descripcion = ucfirst($this->request->getPost('descripcion'));
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
                        echo "<script>";
                        echo "alert('El correo no se encuentra registrado intenta de nuevo o registrate')";                        
                        echo "</script>";
                        return view('iniciarSesionUsuario');
                }
                else{
                        if($usuario[0]['contraseña'] == $contraseña){
                                echo "<script>";
                                echo "alert('Has iniciado sesion Correctamente')";
                                echo "</script>";                      
                                $productos = ['productos' => $producto->findAll()];                
                                return view('index', $productos);
                        }
                        else{                                
                                echo "<script>";
                                echo "alert('La clave es incorrecta');";
                                echo "</script>";
                                return view('iniciarSesionUsuario');
                        }
                }  

        }

        public function vistaIniciarSesion(){
                return view('iniciarSesionUsuario');
    
	}
}