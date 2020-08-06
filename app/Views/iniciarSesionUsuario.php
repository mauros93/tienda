<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="" id="icon"/>
    <link rel="stylesheet" href=<?= base_url("public/styles/style.css")?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />    
    <title>Iniciar sesion</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
        <a class="navbar-brand mx-5 text-light" href="index">
            <img src="https://scontent.feoh3-1.fna.fbcdn.net/v/t1.15752-9/116433772_862547847607346_8378317078528175007_n.jpg?_nc_cat=104&_nc_sid=b96e70&_nc_ohc=vOKEvo8u99QAX_U6zZY&_nc_ht=scontent.feoh3-1.fna&oh=82ef9cae8dff28710748bda4ff03f543&oe=5F4FE4AF" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
            TecnoExpress
        </a>
        <div>            
        <a class="btn btn-light mr-5" href="<?= base_url("public/UserController/registrarUsuario")?>">Registrarse</a>         
        </div>
    </nav>   
    <br><br>
    <div class="container my-5 py-5">    
    <h3 class="text-center">Iniciar Sesion</h3><br>
      <div class="row justify-content-center">        
        <form class="col-6" method="post" action=<?= base_url("public/ProductController/iniciarSesion") ?>>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" name="contraseñaUsuario" class="form-control" id="exampleInputPassword1">
            </div>            
            <button type="submit" class="btn btn-success">Ingresar</button>
        </form>
      </div> 
    </div>
    <br><br>

    <footer class="container-fluid mt-5 text-light"   >
        <div class="row justify-content-around">             
                <div class="col-3">
                    <h2 class="mt-4">Siguenos</h2>
                    <a href="#"><i class="fab fa-facebook mx-3 mt-3 icon"></i></a>
                    <a href=""><i class="fab fa-twitter mx-3 mt-3 icon"></i></a>
                    <a href=""><i class="fab fa-instagram mx-3 mt-3 icon"></i></a>
                </div>   
                <div class="col-3 text-center mt-5">
                    <p>Copyright © 2020 Tienda TecnoExpress. Todos los derechos son de Alejandro Vásquez, Mauricio Builes, Alejandra Carreño, Yuli Toro y Juan Gallego, en su página de ventas. La página tecnoexpress.com es NO OFICIAL, damos todos los derechos de las imágenes a las marcas y nuestros proveedores independientes</p>
                </div>            
                <div class="col-3 mt-4">
                    <h2 class="my-3">Contactanos</h2>
                    <p><i class="fas fa-mobile-alt mx-2"></i>+57 300-111-2222</p>
                    <p><i class="fas fa-phone-alt mx-2"></i>+34 234-5678</p>
                    <p><i class="far fa-envelope mx-2"></i>tecnoexpresss@gmail.com</p>
                    <p><i class="far fa-building mx-2"></i>Medelin Carrera 48 # 50-33</p>
                </div>           
        </div>
    </footer>

</body>
</html>