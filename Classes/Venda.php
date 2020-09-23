<?php

class Venda extends Contrato


    // ATRIBUTOS E METODO CONSTRUTOR SEŔA HERDADO DA CLASSE CONTRATO

{

    //IMPLEMENTANDO MÉTODO DA INTERFACE -> EMISSAO

    public function emitir()
    {
        echo 'Ola sou um contrato de venda.';
    } 
}