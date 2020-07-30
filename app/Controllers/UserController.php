<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class UserController extends BaseController
{
    

	public function index()
	{
    return view('inicioSesionUsuario');
    
	}

	public function iniciarSesion()
	{
    $usuario = new UserModel();
    $correo = $this->request->getPost('correo');
    $contraseña = $this->request->getPost('contraseñaUsuario');
    // echo $correo . "  " . $contraseña;
    print_r($usuario->errors());
    $usuario = $usuario->where('correo', "$correo")->findAll();
    if(count($usuario) == 0){
        echo 'El correo no se encuentra registrado';
    }
    else
    {
        if($usuario[0]['contraseña'] == $contraseña){
            echo $usuario['contraseña'];
            echo "Bienvenido". $usuario[0]['nombre'];
            // return view('index');
        }
        else{
            echo "Contraseña erronea";
        }
    }
    

    
	}

}