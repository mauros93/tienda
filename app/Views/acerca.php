<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="" id="icon"/>
    <link rel="stylesheet" href=<?= base_url("public/styles/styles1.css")?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />    
    <title>Iniciar sesion</title>
  </head>
<body>
  <main>
      <nav class="navbar navbar-expand-lg text-light" >
        <a class="navbar-brand mx-5 text letraB" href="<?= base_url("public/ProductController")?>">
            <img src="https://scontent.xx.fbcdn.net/v/t1.15752-0/p280x280/117130218_307377647075922_7787977850470298924_n.png?_nc_cat=109&_nc_sid=b96e70&_nc_ohc=IcHWL5fBlGwAX-bBxLb&_nc_ad=z-m&_nc_cid=0&_nc_pt=1&_nc_ht=scontent.xx&oh=112bd007f9b7db84377c4d77a9a188ed&oe=5F4EDD12" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
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
        </div>            
        <button class="btn btn-primary mx-3 btn btn-light">Registrarse</button>
        <button class="btn btn-outline-light mx-3" ><a href=""></a> Iniciar sesion</button>
        <div class="btn-group mx-5">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-shopping-cart"></i>      
            </button>
            <div class="dropdown-menu dropdown-menu-lg-right mx-5" id="boton-carrito">
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
      <h1 class="text-center">Desarrolladores</h1>
      <div class="container fondo">
        <div class="row cards">
          <div class="col descripciones">
            <p>Técnico en Desarrollo de
              Software y cursando
              cuarto semestre de
              Ingeniería de Sistemas en
              la Universidad Nacional de
              Medellín. Soy recursivo,
              creativo y curioso. Tengo
              interés por todas las
              tecnologías que tengan
              que ver con la
              programación en la web y
              en dispositivos móviles.
              Manejo buenas relaciones
              interpersonales y que me
              permiten trabajar en
              equipo con excelentes
              resultados.</p>
          </div>
            <div class="card" style="width: 18rem;">
              <img src="https://scontent.feoh3-1.fna.fbcdn.net/v/t1.15752-9/117037511_1160761070973949_163667829450280928_n.jpg?_nc_cat=107&_nc_sid=b96e70&_nc_ohc=1YLNyEepETwAX8MkLVd&_nc_oc=AQn8W5H-nLRrf79duwfD6lELiGFk3W3P8iLsB3MeWHPCVzMCuEUjIDEqPu4ATViCmqvrFWgu7pWq-b6yc1IA6Nps&_nc_ht=scontent.feoh3-1.fna&oh=11765eee165b2543726cabff072d7380&oe=5F50F702" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Rafae Mauricio Builes Marin</p>
                <p>3013201103</p>
                <p>builes@utp.edu.co</p>
              </div>
            </div>
        </div>
        <div class="row descripciones">
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img src="https://scontent.feoh3-1.fna.fbcdn.net/v/t1.15752-9/117083104_613766652889970_313166338350950291_n.jpg?_nc_cat=107&_nc_sid=b96e70&_nc_ohc=1xtT4uXKQ3IAX-qIV21&_nc_ht=scontent.feoh3-1.fna&oh=99f95b1e7d37af67dafa5f620d331d3f&oe=5F52F972" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Soy Yuli Marley Toro</p>
                <p>318 5807337</p>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-8 ">
            <p>Soy Yuli Marley Toro, una joven que le apasiona todo lo que tenga que ver con la tecnología, siempre con capacidad y disponibilidad para aprender cada día más, con responsabilidad, empeño y dedicación.
              Me gusta la perfección, manejo buenas relaciones interpersonales y con habilidades para trabajar en equipo.
              Lo que más me gusta es el diseño de páginas web, para mí eso es arte, arte que se ilustra a través de las pantallas digitales. Además, tengo los conocimientos básicos en lenguaje de enmarcado y etiquetas de HTLM, maquetación y diseño con Bootstrap y CSS, no obstante en lenguajes de programación tales como PHP, JavaScript y C#.</p>
          </div>
        </div>
        <div class="row cards">
          <div class="col descripciones">
            <p>Profesional en comunicación y periodismo de la Universidad de Antioquia, con estudios en derechos humanos y justicia transicional, y en estrategias de mercadeo digital. Poseo conocimientos avanzados en Ilustrator, Photoshop, Premiere y Audition. Estoy desarrollando estudios en desarrollo de software con lenguajes HTML, CSS, JavaScript, PHP, JAVA y C#. Tengo amplia experiencia en hardware, pues me he desempeñado durante años en el ensamble, configuración y mantenimiento de PCS de alta gama.</p>
          </div>
            <div class="card" style="width: 18rem;">
              <img src="https://scontent.feoh3-1.fna.fbcdn.net/v/t1.15752-9/117256050_214357673330116_4681389612482030902_n.jpg?_nc_cat=111&_nc_sid=b96e70&_nc_ohc=Vw74VE3oUhgAX9Ynxjf&_nc_ht=scontent.feoh3-1.fna&oh=57f1c167d3db2a00631af2a8397a5665&oe=5F4F692C" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">alejandro vasquez molina</p>
                  <p>lejomolina@gmail.com</p>
                  <p>3004037907</p>
              </div>
            </div>
        </div>
        <div class="row descripciones">
          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <img src="https://scontent.feoh3-1.fna.fbcdn.net/v/t1.15752-9/117207871_3270255183013184_8174192589124917119_n.jpg?_nc_cat=108&_nc_sid=b96e70&_nc_ohc=TVyFnXO33cMAX-yN4XL&_nc_ht=scontent.feoh3-1.fna&oh=07534bc0e17bb9de0c45e62087cbf6e4&oe=5F5111C1" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Juan Manuel Gallego Posada</p>
                <p>320 6405094</p>
                <p>jmgp248@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-8 ">
            <p>Tecnico en desarrollo de software, soy aplicado,recursivo y tomo el liderasgo en todas la situaciones que pueda y trato de darlo todo en el proyecto, soy un conocedor de distintos lengujes que me ayudan a desempeñarme de manera 
              satisfactoria dentro de este ambito estos son html,javaScript,css,java,c#,php,python y conosco la utilidad de distintos framework de estos lenguajes como son
              bootstrap,angular y demas.

            </p>         
           </div>
        </div>
        <div class="row cards">
          <div class="col descripciones">
            <p>Soy Alejandra Carreño Hidalgo, Estudio Desarrollo de Software e Ingeniería Civil. Mi sueño es contribuir a la modernización de la Ingeniería Civil a través de la creación de nuevas herramientas. Aparte del estudio me gusta la música clásica y soy fan de Alan Turing, Marie Curie y Michael Faraday.</p>
          </div>
            <div class="card" style="width: 18rem;">
              <img src="https://scontent.feoh3-1.fna.fbcdn.net/v/t1.15752-9/116453953_653234158904212_6477974118798566128_n.jpg?_nc_cat=103&_nc_sid=b96e70&_nc_ohc=nFGonN7lxo0AX8_okuI&_nc_ht=scontent.feoh3-1.fna&oh=db7bcd46c80eb657ac8f15d45e804ffe&oe=5F4FEB24" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Alejandra Carreño Hidalgo</p>
                <p>3106149430</p>
                <p>alejandra.carrenohidalgo@gmail.com</p>
              </div>
            </div>
        </div>
      </div>
    </main>

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
</body>
</html>