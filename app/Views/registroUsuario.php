<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- <link rel="icon" type="image/png" href="" id="icon"/> -->
    <link rel="stylesheet" href=<?= base_url("public/styles/style.css")?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />    
    <title>Registo</title>
</head>
<body>

    
    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
        <a class="navbar-brand mx-5 text-light" href="index">
            <img src="https://scontent.feoh3-1.fna.fbcdn.net/v/t1.15752-9/116433772_862547847607346_8378317078528175007_n.jpg?_nc_cat=104&_nc_sid=b96e70&_nc_ohc=vOKEvo8u99QAX_U6zZY&_nc_ht=scontent.feoh3-1.fna&oh=82ef9cae8dff28710748bda4ff03f543&oe=5F4FE4AF" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
            TecnoExpress
        </a>
        <div>            
        <a class="btn btn-light mr-3" href="<?= base_url("public/UserController")?>">Blog</a>                 
        <a class="btn btn-light mr-3" href="<?= base_url("public/UserController")?>">Nosotros</a>
        <a class="btn btn-light mr-5" href="<?= base_url("public/UserController")?>">Iniciar sesion</a>
        
        </div>
    </nav>        
    



    <div class="container">        
        <div class="row justify-content-center">
            <form class="col-8 border" action="registrarUsuario" method="post" >
                <h3 class="my-4 pb-3">Registrate</h3>                 
                <div class="form-group">
                    <label for="inputAddress2">Nombres</label>
                    <input type="text" name="nombres" class="form-control" id="inputAddress2" required>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Correo</label>
                    <input type="email" name="correo" class="form-control" id="validationDefault02" required>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Telefono</label>
                    <input type="number" name="telefono" class="form-control" required>
                    </div>                    
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                    <label for="validationDefault01">contraseña</label>
                    <input type="password" name="contraseña" class="form-control" id="validationDefault01" required>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Confirmar contraseña</label>
                    <input type="password" name="contraseña1" class="form-control" id="validationDefault02" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                    <label for="validationDefault01">Pais</label>
                    <input type="text" name="pais" class="form-control" id="validationDefault01" required>
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="validationDefault02">Ciudad</label>
                    <input type="text" name="ciudad"  class="form-control" id="validationDefault02" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Direccion</label>
                    <input type="text" name="direccion" class="form-control" id="inputAddress2" required>
                </div>                
                <button class="btn btn-primary my-3" type="submit">Registrarse</button>
            </form>
            <div class="col-4">
                <h3 class="mt-4 pb-3 text-left">Ingresa con tus Redes</h3>
                <button class="btn btn-primary btn-lg btn-block mt-5 text-left "><i class="fab fa-facebook mr-3 icon1"></i>Ingresa con Facebook</button>
                <button class="btn btn-danger btn-block btn-lg my-3 text-left"><i class="fab fa-google mr-3 icon1"></i>Ingresa con gmail    </button>
                <button class="btn btn-info btn-block btn-lg my-3 text-left"><i class="fab fa-twitter mr-3 icon1"></i>Ingresa con Twitter</button>

            </div>
        </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <table id="example" class="table table-striped table-bordered " style="background-color: rgba(247, 243, 243, 0.877)">
                    <thead class="bg-light">
                        <tr>
                            <th>Nombres</th>                            
                            <th>Telefono</th>                                                        
                            <th>Correo</th> 
                            <th>Pais</th>
                            <th>Ciudad</th>                            
                            <th>Direccion</th>                            
                            <th>Borrar</th>                            
                            <th>Actualizar</th>                            
                            
                        </tr>
                    </thead>
                    <?php foreach($usuarios as $usuario):?>
                        <tr>                            
                            <td><?= $usuario['nombres'] ?></td>
                            <td><?= $usuario['telefono'] ?></td>
                            <td><?= $usuario['correo'] ?></td>
                            <td><?= $usuario['pais'] ?></td>
                            <td><?= $usuario['ciudad'] ?></td>                            
                            <td><?= $usuario['direccion'] ?></td>
                            <td><a class="btn btn-danger text-light" type="button" data-toggle="modal" data-target=<?= '#mm'.$usuario['id_usuario'] ?>><i class="fas fa-trash"></a></td>
                            <td><a class="btn btn-success text-light" type="button" data-toggle="modal" data-target=<?= '#m'.$usuario['id_usuario'] ?>><i class="fas fa-pencil-alt"></i></a></td>                            
                        </tr>                        

                        <!-- Modal Eliminar producto -->
                        <div class="modal" tabindex="-1" role="dialog" id=<?= 'mm'.$usuario['id_usuario'] ?>>
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                <div class="modal-header bg-primary text-light">
                                    <h5 class="modal-title">Realmente deseas eliminar el producto?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>                                
                                <div class="modal-footer">
                                    <a href="<?= base_url('public/UserController/eliminarUsuario/'.$usuario['id_usuario']) ?>" class="btn btn-danger text-light">Eliminar producto</a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>              
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal actualizar Usuario -->
                        <div class="modal" tabindex="-1" role="dialog" id=<?= 'm'.$usuario['id_usuario'] ?>>
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title">Actualizar producto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action=<?= base_url("public/UserController/actualizarusuario/".$usuario['id_usuario'])?> method="post">
                                        <div class="form-group">    
                                            <label for="validationDefault02">Nombres</label>                    
                                            <input type="text" name="nombres" class="form-control" id="exampleInputEmail1" value="<?= $usuario['nombres'] ?>" aria-describedby="emailHelp" required>                        
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault02">Correo</label>
                                                <input type="email" name="correo" value="<?= $usuario['correo'] ?>" class="form-control" id="validationDefault02" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault01">Telefono</label>
                                                <input type="number" name="telefono" value="<?= $usuario['telefono'] ?>" class="form-control" id="validationDefault01" required>
                                            </div>                    
                                        </div> 
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                            <label for="validationDefault01">Contraseña</label>
                                            <input type="password" name="contraseña" class="form-control" value="<?= $usuario['pais'] ?>" id="validationDefault01" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                            <label for="validationDefault02">Confirmar Contraseña</label>
                                            <input type="password" name="contraseña1" value="<?= $usuario['ciudad'] ?>" class="form-control" id="validationDefault02" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                            <label for="validationDefault01">Pais</label>
                                            <input type="text" name="pais" class="form-control" value="<?= $usuario['pais'] ?>" id="validationDefault01" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                            <label for="validationDefault02">Ciudad</label>
                                            <input type="text" name="ciudad" value="<?= $usuario['ciudad'] ?>" class="form-control" id="validationDefault02" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Direccion</label>
                                            <input type="text" value="<?= $usuario['direccion'] ?>" name="direccion" class="form-control" id="inputAddress2">
                                        </div>                                                            
                                        <button type="submit" class="btn btn-primary">Actualizar datos</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Descartar cambios</button>                
                                </div>
                                </div>
                            </div>
                        </div>                                           
                    <?php endforeach?>
                    <tfoot>
                        <tr>
                            <th>Nombres</th>                            
                            <th>Telefono</th>                                                        
                            <th>Correo</th> 
                            <th>Pais</th>
                            <th>Ciudad</th>                            
                            <th>Direccion</th>                            
                            <th>Borrar</th>                            
                            <th>Actualizar</th> 
                        </tr>
                    </tfoot>
                </table>                
            </div>
        </div>
    </div>


    <footer class="container-fluid mt-5 text-light">
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




    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script> 
    <script src=<?= base_url("public/scripts/formularioProducto.js") ?>></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>    
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script> 
    <script>
        // Con este scrip referenciamos a la tabla que se llama example
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
                }
            });
        });
    </script>
    
    
</body>
</html>