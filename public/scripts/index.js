// Co
const carrito = document.getElementById('carrito') 

// con esto seleccionamos una zona del documento a la que luego le agregaremos un evento click
const productos = document.getElementById('lista-productos')

// Aca es donde insertaremos los productos seleccionados por el usuario
const listaProductos = document.querySelector('#lista-carrito tbody') 



// Listerners
cargarEventlisteners();
function cargarEventlisteners(){
    // Este evento se ejecuta cuando damos click sobre cualquier boton que diga comprar producto
    productos.addEventListener('click', comprarProducto)

}




// Funciones

function comprarProducto(e){
    e.preventDefault()
    // e.target.classList
    if(e.target.classList.contains('comprar-producto')){
        const producto = e.target.parentElement.parentElement.parentElement 
        leerDatosProducto(producto)
    }
}

function leerDatosProducto(producto){
    const datosProducto = {
        imagen : producto.querySelector('img').src,
        titulo : producto.querySelector('h5').textContent,
        precio : producto.querySelector('h4').textContent,

    }
    insertarCarrito(datosProducto)
}


//Aca insertaremos los datos del objeto comprado al carrito
function insertarCarrito(datosProducto){
    const row = document.createElement('tr')
    
    row.innerHTML = `        
        <td>${datosProducto.titulo}</td>
        <td>${datosProducto.precio}</td>
        <td>
            <a href="#" class="borrar-curso"><i class="fas fa-times-circle"></i></a>
        </td>       
    `

    

    listaProductos.appendChild(row)
}



