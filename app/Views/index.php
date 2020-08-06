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

    
        <nav class="navbar navbar-expand-lg text-light" >
            <a class="navbar-brand mx-5 text-light" href="index">
                <img src="https://scontent.feoh3-1.fna.fbcdn.net/v/t1.15752-9/116585514_636757907223751_7958454312908454227_n.jpg?_nc_cat=101&_nc_sid=b96e70&_nc_ohc=eEoAfkg8zN0AX-fLkMG&_nc_ht=scontent.feoh3-1.fna&oh=5c4b7a647e7a24427ecac31f7f363c4b&oe=5F4DF57B" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
                TecnoExpress
            </a>  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">                
                <form class="form-inline my-2 my-lg-0" method="post" action="ProductController/buscar">
                <input class="form-control mr-sm-1" type="search" name="buscar" placeholder="¿Que deseas comprar?">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div id="usuario">            
                <a class="btn btn-light mr-3" href="<?= base_url("public/UserController/registrarUsuario")?>">Registrarse</a>  
                <a class="btn btn-outline-light mr-5" href="<?= base_url("public/UserController")?>">Iniciar sesion</a>
                <a class="btn btn-light " href="<?= base_url("public/home/blog")?>">Blog</a>  
            <div class="btn-group mx-5">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-shopping-cart"></i>      
                </button>
                <div class="dropdown-menu dropdown-menu-lg-right mr-5" id="boton-carrito">
                    <table class="table" id='lista-carrito'>
                        <thead>
                            <tr>              
                            <th scope="col" class="pr-5"><h4>Referencia</h4></th>
                            <th scope="col" class="pr-5"><h4>Precio</h4></th>
                            <th scope="col"><h4>Eliminar</h4></th>
                            </tr>
                        </thead>
                        <tbody id='numero-productos'>                                                        
                        </tbody>                        
                    </table>    
                    <span></span>                
                </div>
            </div>
        </nav>        
        






    <div class="container mt-5">
        <div class="row justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide col-8" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSAQswKctABCPe68JmEZfH-4td2-vAQB_DVow&usqp=CAU" class="d-block w-100" height="300" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://www.acerstore.cl/site/files/imagenes/media/2020/04/n5_r5_gtx.jpg" class="d-block w-100" height="300" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="https://http2.mlstatic.com/teclado-gamer-iluminado-usb-havit-kb465l-D_Q_NP_671150-MCO31563676972_072019-F.webp" class="d-block w-100"  height="300" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>



       
    <div class="container" id="lista-productos">
        <div class="row justify-content-center">    
        <h1 class="text-center col-10 my-5">Nuestros Productos</h1>   
            <div class="card mb-3 col-8" style="background-color: rgba(247, 243, 243, 0.877)
">                
                
                <?php
                foreach($productos as $producto){                    
                    echo '<div class="row no-gutters my-3">';
                    echo '<div class="col-md-4">';
                    echo '<img src='.$producto['link_imagen'].' class="card-img-top img-fluid" alt="...">';
                    echo '</div>';
                    echo '<div class="col-md-8">';                    
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">'.$producto['referencia'].'</h5>';
                    echo '<p class="card-text">'.$producto['descripcion'].'</p>';
                    echo '<h4>'.'$ '. number_format($producto['precio']).'</h4>';
                    echo '<button class="btn btn-primary mt-2 comprar-producto">Agregar al carrito</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<hr>';        
                }
                ?>

                <?php //foreach($productos as $producto):?>
                    <!-- <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6417/6417707_sd.jpg;maxHeight=200;maxWidth=300" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <h4>$3.124.234</h4>
                                <button class="btn btn-primary mt-2">Agregar al carrito</button>
                            </div>
                        </div>
                    </div> -->
                <?php //endforeach?>

                
            </div>
        </div>
    </div>


    <footer class="container-fluid mt-5 text-light">
        <div class="row justify-content-around">             
                <div class="col-3 align-items-center">
                    <h2 class="mt-4 text-center">Siguenos</h2>
                    <a href=""><i class="fab fa-facebook mx-3 icon"></i></a>
                    <a href=""><i class="fab fa-twitter mx-3 icon"></i></a>
                    <a href=""><i class="fab fa-instagram mx-3 icon"></i></a>
                </div>   
                <div class="col-3 text-center mt-4">
                    <p>Copyright © 2020 Tienda TecnoExpress. Todos los derechos son de Alejandro Vásquez, Mauricio Builes, Alejandra Carreño, Yuli Toro y Juan Gallego, en su página de ventas. La página tecnoexpress.com es NO OFICIAL, damos todos los derechos de las imágenes a las marcas y nuestros proveedores independientes</p>
                </div>            
                <div class="col-3 mt-3">
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
    <script src=<?= base_url("public/scripts/index.js")?>></script>
</body>
</html>