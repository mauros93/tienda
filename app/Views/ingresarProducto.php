<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- <link rel="icon" type="image/png" href="" id="icon"/> -->
    <link rel="stylesheet" href=<?= base_url("public/styles/style.css")?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />    
    <title>Tecno expres</title>
</head>
<body>

    
    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
        <a class="navbar-brand mx-5 text-light" href="index">
            <img src="https://scontent.feoh3-1.fna.fbcdn.net/v/t1.15752-9/116433772_862547847607346_8378317078528175007_n.jpg?_nc_cat=104&_nc_sid=b96e70&_nc_ohc=vOKEvo8u99QAX_U6zZY&_nc_ht=scontent.feoh3-1.fna&oh=82ef9cae8dff28710748bda4ff03f543&oe=5F4FE4AF" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy" class="text-light">
            TecnoExpress
        </a>
        <div class="">
        <a class="btn btn-light mr-3" href="<?= base_url("public/UserController/registrarUsuario")?>">Registrarse</a>  
        <a class="btn btn-outline-light mr-5" href="<?= base_url("public/UserController")?>">Iniciar sesion</a>
        
        </div>
    </nav>        
    
    
    

    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <form class="col-10" method="post" action="ingresarProducto">
                <h2 class="text-center my-4 pb-3">Ingresa el producto</h2>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Marca</label>
                    <input type="text" name="marca" class="form-control" id="inputPassword4" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Referencia</label>
                    <input type="text" name="referencia" class="form-control" id="inputEmail4" required>
                    </div>
                                       
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Precio</label>
                        <input type="number" name="precio" class="form-control" id="inputEmail4" required>
                    </div>                     
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Cantidad</label>
                        <input type="number" name="cantidad" class="form-control" id="inputPassword4" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label >Descripcion</label>
                    <textarea class="form-control" name="descripcion" id="validationTextarea" placeholder="Agregue las caracteristicas del producto" required></textarea>
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Link Imagen</label>
                    <input type="text" name="link_imagen" class="form-control" id="inputAddress2" required>
                </div>
                       
                <button type="submit" class="btn btn-primary">Agregar producto</button>
            </form>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                <table id="example" class="table table-striped table-bordered"  style="background-color: rgba(247, 243, 243, 0.877)">
                    <thead class="bg-light">
                        <tr>
                            <th>Marca</th>
                            <th>Referencia</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>cantidad</th>                            
                            <th>Borrar</th>                            
                            <th>Actualizar</th>                            
                        </tr>
                    </thead>
                    <?php foreach($productos as $producto):?>
                        <tr>                            
                            <td><?php echo $producto['marca'] ?></td>
                            <td><?php echo $producto['referencia'] ?></td>
                            <td><?php echo $producto['descripcion'] ?></td>
                            <td><?php echo '$'.number_format($producto['precio']) ?></td>                            
                            <td><?php echo $producto['cantidad'] ?></td>
                            <td><a class="btn btn-danger text-light" type="button" data-toggle="modal" data-target=<?= '#mm'.$producto['id_producto'] ?>><i class="fas fa-trash"></a></td>
                            <td><a class="btn btn-success text-light" type="button" data-toggle="modal" data-target=<?= '#m'.$producto['id_producto'] ?>><i class="fas fa-pencil-alt"></i></a></td>                            
                        </tr>                        

                        <!-- Modal Eliminar producto -->
                        <div class="modal" tabindex="-1" role="dialog" id=<?= 'mm'.$producto['id_producto'] ?>>
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                <div class="modal-header bg-primary text-light">
                                    <h5 class="modal-title">Realmente deseas eliminar el producto?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                <div class="modal-footer">
                                    <a href="<?= base_url('public/ProductController/EliminarProducto/'.$producto['id_producto']) ?>" class="btn btn-danger text-light">Eliminar producto</a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>              
                                </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal actualizar producto -->
                        <div class="modal" tabindex="-1" role="dialog" id=<?= 'm'.$producto['id_producto'] ?>>
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header bg-primary ">
                                    <h5 class="modal-title ">Actualizar producto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action=<?= base_url("public/ProductController/actualizarProducto/".$producto['id_producto'])?> method="post">
                                    <div class="form-group">    
                                            <label for="validationDefault02">Marca</label>                    
                                            <input type="text" name="marca" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $producto['marca'] ?>" required>                        
                                        </div>
                                        <div class="form-group">  
                                            <label for="validationDefault02">Referencia</label>                      
                                            <input type="text" name="referencia" class="form-control" id="exampleInputPassword1" value="<?= $producto['referencia'] ?>" required>
                                        </div> <div class="form-group">   
                                            <label for="validationDefault02">Precio</label>                     
                                            <input type="number" class="form-control" name="precio" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $producto['precio'] ?>" required>                        
                                        </div>
                                        <div class="form-group">       
                                            <label for="validationDefault02">Cantidad</label>                 
                                            <input type="number" name="cantidad" class="form-control" id="exampleInputPassword1" value="<?= $producto['cantidad'] ?>" required>
                                        </div> 
                                        <div class="mb-3">  
                                            <label for="validationDefault02">Descripcion</label>                      
                                            <textarea class="form-control" name="descripcion" id="validationTextarea" required><?= $producto['descripcion'] ?></textarea>
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
                            <th>Marca</th>
                            <th>Referencia</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>cantidad</th>                            
                            <th>Borrar</th>                            
                            <th>Actualizar</th>
                        </tr>
                    </tfoot>
                </table>
                <a href="#inicio" class="btn btn-success my-4">Nuevo Registro</a>
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