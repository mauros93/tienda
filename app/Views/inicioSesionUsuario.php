<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="" id="icon"/>
    <link rel="stylesheet" href="<?php base_url('public/styles/style.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />    
    <title>Iniciar sesion</title>
</head>
<body>
    <div class="row justify-content-end mb-5">
        <nav class="navbar navbar-expand-lg col-12 navbar-light bg-light d-flex flex-row-reverse bd-highlight">        
            <a class="navbar-brand my-2 mx-5" href="ProductController">Tecno Expresss</a>
            <button class="navbar-toggler p-2 bd-highlight " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>            
            <a href="registro.php"><button class="btn btn-primary">Regitrarse</button></a>      
            <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
        </nav> 
    </div>   
    
    <div class="container">    
      <div class="row justify-content-center">
        <form class="col-6" method="post" action="UserController/iniciarSesion">
            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="contraseñaUsuario" class="form-control" id="exampleInputPassword1">
            </div>            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div> 
    </div>
</body>
</html>