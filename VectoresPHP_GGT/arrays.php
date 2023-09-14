<?php
    //Crea un array llamado nombres que contenga varios nombres
    $nombres = array("Maria","Carlos","Guada","Teresa","Valenti","Ferran","Gloria","Rafa","Ruben");
    //Muestra el número de elementos que tiene el array (función count)
    $totalElementos = count($nombres);
    echo "El array contiene " . $totalElementos . " nombres. " . "\n";
    /*Crea una cadena que contenga los nombres de los alumnos existentes en el array separados por un espacio y muéstrala (función de strings implode) */
    $cadenaPersonas = implode(" ", $nombres);
    echo "Los nombres que se han incluido en el array son: " . $cadenaPersonas . "\n";
    //Muestra el array ordenado alfabéticamente (función asort)
    asort($nombres);
    echo "Los nombres ordenados alfabéticamente son: ";
    print_r($nombres);
    echo  "\n";
    //Muestra el array en el orden inverso al que se creó (función array_reverse)
    $ordenInverso = array_reverse($nombres);
    echo "El array em orden inverso al creado es: ";
    print_r($ordenInverso);
    echo  "\n";
    //Muestra la posición que tiene tu nombre en el array (función array_search)
    $miPosicion = array_search("Guada", $nombres);
    echo "La posición de 'Guada' en el array es la $miPosicion. " ."\n";
    //Crea un array de alumnos donde cada elemento sea otro array que contenga el id, nombre y edad del alumno.
    $alumnos = array(
        array("id" => 1, "nombre" => "Maria", "edad" => 25),
        array("id" => 2, "nombre" => "Carlos", "edad" => 27),
        array("id" => 3, "nombre" => "Guada", "edad" => 31),
    );
    //Crea una tabla html en la que se muestren todos los datos de los alumnos.
    echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Edad</th>
        </tr>";
    foreach ($alumnos as $alumno) 
    {
    echo "<tr>
            <td>{$alumno['id']}</td>
            <td>{$alumno['nombre']}</td>
            <td>{$alumno['edad']}</td>
        </tr>";
    }
    echo "</table>";
    echo "\n";
    //Utiliza la función array_column para obtener un array indexado que contenga únicamente los nombres de los alumnos y muéstralo por pantalla.
    $nombresAlumnos = array_column($alumnos, "nombre");
    echo "Nombres de los alumnos: ";
    print_r($nombresAlumnos);
    echo "\n";
    //Crea un array con 10 números y utiliza la función array_sum para obtener la suma de los 10 números.
    $numeros = array(10,20,30,40,50,60,70,80,90,100);
    $sumaNumeros = array_sum($numeros);
    echo "La suma de los números en el array es: $sumaNumeros";
    echo "\n";
?>