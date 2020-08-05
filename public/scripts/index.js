// Co
const carrito = document.getElementById('lista-carrito') 

// con esto seleccionamos una zona del documento a la que luego le agregaremos un evento click
const productos = document.getElementById('lista-productos')

// Aca es donde insertaremos los productos seleccionados por el usuario
const listaProductos = document.querySelector('#lista-carrito tbody') 

//Aca seleccionamos al padre del elemento del boton para que cuando el usuario agregue un producto se cree el boton vaciar carrito
const botonCarrito = document.querySelector('#boton-carrito span') 




// Listerners, aca creamos una funcion la cual crea eventos para la zona de codigo que le digamos
cargarEventlisteners();
function cargarEventlisteners(){
    // Este evento se ejecuta cuando damos click sobre cualquier boton que diga comprar producto
    productos.addEventListener('click', comprarProducto)
    carrito.addEventListener('click', eliminarProducto)

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
            <a href="#"><h2><i class="fas fa-times-circle text-danger ml-4 borrar-producto"></i></h2></a>
        </td>     
    `
    if(document.getElementById('vaciar-carrito') == null){
        const boton = document.createElement('button')   
        boton.id = "vaciar-carrito"        
        boton.textContent = 'Vaciar Carrito'
        boton.classList.add("btn-block")
        boton.classList.add("btn-primary")
        boton.addEventListener('click', vaciarCarrito)
        botonCarrito.appendChild(boton) 
        // console.log(document.getElementById('vaciar-carrito'))       
    }
    listaProductos.appendChild(row)
}


// Asi eliminamos un producto que ya este en el carrito
function eliminarProducto(e){
    e.preventDefault()
    if(e.target.classList.contains('borrar-producto')){
        // Con esto decimos que si sobre el elemento que da click tiene la clase 'borrar-producto' que nos lleve a varios padres arriba y borre todo, subimos hasta que quedamos con toda la etiqueta de la fila y la borramos
        e.target.parentElement.parentElement.parentElement.parentElement.remove()    
    }
    if(document.getElementsByTagName('tr').length == 1){
        document.getElementById('vaciar-carrito').remove()
    }
}

function vaciarCarrito(e){
    document.getElementById('numero-productos').remove()
    document.getElementById('vaciar-carrito').remove()
}
