<?php

class Casamento extends Certidao 

            // ATRIBUTOS E METODO CONSTRUTOR SEŔA HERDADO DA CLASSE CERTIDÃO

{


            //IMPLEMENTANDO MÉTODO DA INTERFACE -> EMISSAO

    public function emitir()
    {
        echo 'Eu sou uma certidão de casamento';
    }
}