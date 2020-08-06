<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class UserController extends BaseController
{
    

	public function index()
	{
    return view('iniciarSesionUsuario');
    
    }
    
    public function registrarUsuario(){
        $usuario = new UserModel();
        $nombres = ucwords(strtolower($this->request->getPost('nombres')));
        $correo = strtolower($this->request->getPost('correo'));
        $telefono = $this->request->getPost('telefono');
        $contraseña = $this->request->getPost('contraseña');
        $contraseña1 = $this->request->getPost('contraseña1');
        $pais = ucwords(strtolower($this->request->getPost('pais')));
        $ciudad = ucwords(strtolower($this->request->getPost('ciudad')));
        $direccion = ucwords(strtolower($this->request->getPost('direccion')));   
        $datosUsuario=['nombres' => $nombres, 'correo' => $correo, 'telefono' => $telefono, 'contraseña' => $contraseña, 'cfm_contraseña' => $contraseña1, 'pais' => $pais, 'ciudad' => $ciudad, 'direccion' => $direccion];        
        $usuario->save($datosUsuario);
        $usuarios = ['usuarios' => $usuario->findAll()];
        return view('registroUsuario', $usuarios);
    }


    public function actualizarUsuario($id){
        $usuario = new UserModel();
        $nombres = ucwords(strtolower($this->request->getPost('nombres')));
        $correo = strtolower($this->request->getPost('correo'));
        $telefono = $this->request->getPost('telefono');
        $contraseña = $this->request->getPost('contraseña');
        $contraseña1 = $this->request->getPost('contraseña1');
        $pais = ucwords(strtolower($this->request->getPost('pais')));
        $ciudad = ucwords(strtolower($this->request->getPost('ciudad')));
        $direccion = ucwords(strtolower($this->request->getPost('direccion')));   
        $datosUsuario=['nombres' => $nombres, 'correo' => $correo, 'telefono' => $telefono, 'contraseña' => $contraseña, 'cfm_contraseña' => $contraseña1, 'pais' => $pais, 'ciudad' => $ciudad, 'direccion' => $direccion];    
        $usuario->update($id, $datosUsuario);        
        $usuarios = ['usuarios' => $usuario->findAll()];
        return view('registroUsuario', $usuarios);
    }



    public function eliminarUsuario($id){
        $usuario = new UserModel();
        $usuario->delete($id);
        $usuarios = ['usuarios' => $usuario->findAll()];                
        return view('registroUsuario', $usuarios);
    }


    

	// public function iniciarSesion()
	// {
    // $usuario = new UserModel();
    // $correo = $this->request->getPost('correo');
    // $contraseña = $this->request->getPost('contraseñaUsuario');
    // // echo $correo . "  " . $contraseña;
    // print_r($usuario->errors());
    // $usuario = $usuario->where('correo', "$correo")->findAll();
    // if(count($usuario) == 0){
    //     echo 'El correo no se encuentra registrado';
    // }
    // else
    // {
    //     if($usuario[0]['contraseña'] == $contraseña){
    //         echo $usuario['contraseña'];
    //         echo "Bienvenido". $usuario[0]['nombre'];
    //         // return view('index');
    //     }
    //     else{
    //         echo "Contraseña erronea";
    //     }
    // }   
	// }

}