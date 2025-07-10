<?php
class Persona
{

    // Atributos en el cuerpo de la clase
    private $telefono;

    // Constructor que cumple la funcion de declarar los atributos de la clase y recibirlos como parametros a la vez
    // excepto el telefono que se recibe como parametro y se asigna dentro del constructor
    public function __construct(private $nombre, private $edad, private $direccion, $telefono)
    {
        $this->telefono = $telefono;
    }

    // Metodo saludar que devuelve un saludo personalizado
    public function saludar()
    {
        return "Hola, mi nombre es {$this->nombre} y tengo {$this->edad} años.";
    }


    // ====> METODOS OPCIONALES DE APRENDER <======, Pero que son interesantes de conocer

    // Métod magico para acceder a propiedades privadas
    public function __get($property)
    {

        if (property_exists($this, $property)) {
            return $this->$property;
        }
        return 'No existe la propiedad ' . $property;
    }

    // Métod mágico para establecer propiedades privadas
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            echo "No se puede establecer la propiedad {$property}. No existe.";
        }
    }
}


// Trait para agregar funcionalidad a la clase Paraguayo
// Un trait es una forma de reutilizar código en múltiples clases
trait TieneBanderaTricolor {

    public function flamearBanderaTricolor() {
        echo "flameando la bandera tricolor";
    }
}

// Clase Paraguayo que extiende de Persona
class Paraguayo extends Persona {

    // Usando el trait para agregar funcionalidad
    use TieneBanderaTricolor;

    private $terere = false;

    // Sobrescritura del metodo saludar de la clase Persona
    public function saludar() {

        // Llamando al metodo saludar de la clase padre
        $saludoGenerico = parent::saludar();

        echo "$saludoGenerico. \n Soy Paraguayo y ";

        if ($this->terere) {
            echo "traje terere";
        } else {
            echo "no traje terere";
        }
    }

    public function llevarTerere() {
        $this->terere = true;
    }

    public function tomarTerere() {
        if ($this->terere) {
            echo "Tomando gf";
        } else {
            echo "Ndiii, me olvide";
        }
    }

}

// Instanciar la clase Persona
$persona = new Persona(
    "Juan",
    30,
    "Calle Falsa 123",
    "1234567890"
);

echo $persona->saludar() . "<br>";
echo "Nombre: {$persona->nombre} <br>";
echo "Nombre: {$persona->hola} <br>";


// Instanciar la clase Paraguayo
$paraguayo = new Paraguayo(
    'Pedro',
    20,
    'Calle',
    '0987654321'
);

echo "<br>";
echo "<br>";

// Llamar al métod saludar de la clase Paraguayo
$paraguayo->saludar();
echo "<br>";
$paraguayo->tomarTerere();
echo "<br>";

$paraguayo->llevarTerere();

echo "<br>";echo "<br>";
$paraguayo->saludar();
echo "<br>";
$paraguayo->tomarTerere();

echo "<br>";
$paraguayo->flamearBanderaTricolor();