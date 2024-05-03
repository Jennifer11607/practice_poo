<?php 

class producto {
    #definicion de los atributos 
    protected string $nombre;
    public int $precio;
    public bool $disponible;

    #metodo contructor, se ejecuta al efectuar la instancia
    public function _construc(string $nombre, int $precio, bool $disponible)
    {
    #se les da valores a los atributos con los parametros que recibe el metodo constructor

    $this→nombre = $nombre;

    $this→precio = $precio;

    $this→disponible = $disponible;
    }


    #definicion de metodos
    public function mostrarProducto() {
    echo "El producto es: " . $this→nombre . " y su precio es de: " . $this→precio;
}
#metodo getter para la propiedad protegida de nombre
public function getNombre(): string {
    
    return $this→nombre;
}
#metodo setter para propiedad protegida de nombre
public function setNombre(string $nombre) {
$this→nombre = $nombre;
}

}

$producto = new producto('tablet', 200, true);
// $producto→mostrarProducto();
echo $producto→nombre;
echo $producto→getNombre();
$producto→setNombre ('Nuevo Nombre');
echo $producto→getNombre();