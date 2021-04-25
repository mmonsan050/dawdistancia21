<?php

/** PRUEBA DE FUNCIONAMIENTO DE RESPOITORIO **/

/**
* Clase que se encarga de gestionar el nombre, apellidos y edad de una persona.
*
* @author Matías Montavez Sánchez
* @version 1.0
* @internal Clase en proceso de desarrollo, aún no terminada
*/
class Persona {
private $nombre;
private $apellido;
private $edad;   

/**
* Constructor con parámetros.
* Constructor que recibe como parámetros el nombre, apellidos y edad de una persona y crea un objeto con dichos datos
* 
* @param string $nombre Nombre de la persona
* @param string $apellidos Apellidos de la persona
* @param int $edad Edad de la persona
*/
public function __construct($nombre, $apellidos, $edad){
$this->nombre = $nombre;
$this-> apellido = $apellidos;
$this->edad = $edad;
}
/**
* Función que aumenta la edad de una persona.
* Función que añade a la edad de una persona los años que se introducen por parámetro.
* 
* @param int $masanios Años a sumar a una persona
* @return int Devuelve la nueva edad de la persona añadidos los años introducidos por parámetro
*/
public function envejecer($masanios){
return $this->edad+$masanios;
}  
}
