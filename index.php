

<?php

    //Diferentes Metodos de los "ARRAYS"

    $array = (array) ["Miguel", "Marcelo", "Alex", "Walter", "Juan"];
    //Insertar en la lista un dato al final
    $res = array_push($array, "Thomas");
    $array[] = "Alex";         //Forma abreviada

    //Insertar en la lista un dato al inicio
    $res = array_unshift($array, "Thomas");

    //Extrae y Elimina ultimo dato de la lista
    $res = array_pop($array);

    //Extrae y Elimina primer dato de la lista
    $res = array_shift($array);

    //Extraemos los datos necesarios de las lista y afectamos
    //Dicha lista, nos vuelve los datos estraidos de la lista 
    $res = array_splice($array, 2);

    //Si el 3 valor del metos es negativo se pocicionara en el ultimo
    //Elemento y estraera dichos valor
    $res = array_splice($array, 1, -1);
    $res = array_splice($array, 2, 2);

    // Despues del primier datos de nuestra lista eliminamos los demas
    //e insertamos en la lista afecta un nuevo datos despues del dato selecionado
    $res = array_splice($array, 1, count($array), "Thomas");

    
    //Insertamos datos en la lista principal segun el puntero 
    $res = array_splice($array, 2, 0, ["Thomas", "Isabella"] );


    //Duplica los datos de la lista principal sin afectarla
    //Y retorna los dos selecionados con el puntero
    $res = array_slice($array,1,2);

    //Organiza la lista (Organiza 2 o mas tipos de variables)
    $res = sort($array, SORT_NATURAL | SORT_FLAG_CASE );

    //Buscamos los indices de los datos con el metodo y segun los parametros
    //el nombre del valor de lista si el datos es identico operador compracion (===) (true,false)
    //Como resultado son los indices en un lista array
    $res = array_keys($array, "Marcelo", true);

    //Buscamos los indices de los datos con el metodo y segun los parametros
    //el nombre del valor de lista si el datos es identico operador compracion (===) (true,false)
    //Como resultado es el indicice encontrado
    $res = array_search("Miguel", $array["Profesores"], true);

    // Crear y rellenar un array con un dato especifico ("Curso_PHP")
    $res = (array) array_fill(0,5,"Curso_PHP");
    
    // Crear y rellenar un array siempre y cuando el array al utilizar sea menor
    //A los campos a rellenar con un dato especifico ("Curso_PHP")
    $res =  array_pad($array,count($array)+5,"Curso_PHP");
 

    //Combina dos array para crea un array asociativo siendo el primer parametro
    //Las keys y el segundo los datos relacionados a la key
    $res = array_combine($array , $array1);

    header('Content-Type: application/json');
    $array = (array) [
        array(
            "CC" => 123456789,
            "Nombre" => "Miguel Angel",
            "Edad" => 23,
            "Estado_civil" => false,
            "Salud" => array(
                "NIT" => 123,
                "Nombre" => "Coosalud"
            ),
        ),
        array(
            "CC" => 8686,
            "Nombre" => "Thomas Perez",
            "Edad" => 15,
            "Estado_civil" => true,
            "Salud" => array(
                "NIT" => 456,
                "Nombre" => "Cafesalud"
            ),
            
        ),
        array(
            "CC" => 4868486,
            "Nombre" => "Juan Carlos",
            "Edad" => 25,
            "Estado_civil" => true,
            "Salud" => array(
                "NIT" => 798,
                "Nombre" => "Sanitas"
            ),
        ),
        array(
            "CC" => 86486,
            "Nombre" => "Claudia Milena",
            "Edad" => 20,
            "Estado_civil" => false,
            "Salud" => array(
                "NIT" => 753,
                "Nombre" => "EPS"
            ),
        ),
        array(
            "CC" => 486486745,
            "Nombre" => "Marcelo Gomez",
            "Edad" => 20,
            "Estado_civil" => false,
            "Salud" => array(
                "NIT" => 159,
                "Nombre" => "Comeva"
            ),
        ),
    ];

    $nit = array_column(
                array_column(
                    $array, "Salud"
                ),
            "NIT"
        );
    foreach ($array as $key => $value) {
        unset($array[$key]["Salud"]);
    }
    $res = array_combine($nit, $array);
   

    //Convierte los datos de una lista enumerada en variables
    //individuales 
    $array = array("Nike", "Violeta", 2500);

    // list($zapasto,$color,$precio) = $array;
    print_r($color);
    


    
    //El nombre de la variable la asigana a un array asociativo con su valor
    //dado en la variable mensionada

    $profesor = (string) "Miguel";
    $universidad = (string) "Comfenalco";
    $permiso = (bool) false ;
    $alumnos = (array) ["Willian","Juan"]; 

    $res = compact('universidad','profesor','permiso','alumnos');

    $Nombre = "Juan";
    $array = (array) ["Nombre" => "Miguel","Apellido" => "Castro"];

    extract($array, EXTR_PREFIX_SAME, "data");

    print_r($data_Nombre);
    echo "\n";
    print_r($Apellido);


    print_r($array);
    echo "<br>";
    print_r($res);





?>