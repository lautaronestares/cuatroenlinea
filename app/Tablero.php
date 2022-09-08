<?php

namespace App;

interface interfazTablero{

    public function dimensionTableroX() : int; // dimension del tablero en el eje X
    public function dimensionTableroY() : int; // dimension del tablero en el eje Y
    public function limpiarTablero();//Vuelve al tablero en su estado original sin fichas
    public function ponerFicha(int $x, int $y, Ficha $ficha);//Pone una ficha arriba de la ficha de mas altura en y
    public function sacarFicha(int $x, int $y); //Se fija cual es la ficha de mas altura en el eje y, y la saca
    public function hayFicha(int $x, int $y); //devuelve True o False dependiendo si hay una ficha en la posicion
    public function devolverValorCasilla(int $x,int $y);//devuelve el valor de la casilla dada
}


class Tablero implements interfazTablero
{
    protected int $dimX;
    protected int $dimY;

    protected $tablero;


    public function __construct (int $dim_x = 7, int $dim_y = 7) {
        if($dim_x <= 4 && $dim_y <= 4){
            throw new Exception("El tablero debe ser de al menos 4 por 4");
        }

        $this->dimX = $dim_x;
        $this->dimY = $dim_y;

        $this->limpiarTablero();

    }
    
    public function dimensionTableroX() : int{
        return $this->dimX;
    }

    public function dimensionTableroY() : int{
        return $this->dimY;
    }

    
    public function limpiarTablero(){
        for($x = 0; $x < $this->dimensionTableroX(); $x++){
            for($y = 0; $y < $this->dimensionTableroY(); $y++){
                $this->tablero[$x][$y] = "0";
            }
        }
    } 