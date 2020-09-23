<?php

abstract class Certidao implements Emissao

                        // ATRIBUTOS DA CLASSE

{
    protected $numeroregistro;
    protected $nometitular;
    protected $nomedeclarante;
    protected $tipo;
    protected $dataemissao;
    protected $nometabeliao;
    protected $nomecartorio;
    protected $quantidade;

                        // DEFININDO METODO CONSTRUTOR 


    public function __construct($numeroregistro, $nometitular, $nomedeclarante, $tipo, $dataemissao, $nometabeliao, $nomecartorio)
    
    {
        $this->numeroregistro = $numeroregistro;
        $this->nometitular = $nometitular;
        $this->nomedeclarante = $nomedeclarante;
        $this->tipo = $tipo;
        $this->dataemissao = $dataemissao;
        $this->nometabeliao = $nometabeliao;
        $this->nomecartorio = $nomecartorio;
    }

                        // METODO PARA CALCULAR A QUANTIDADE

    public function calcularTotal(Emissao $certidao)
    {
        $total = 0;

        $this->quantidade[] = $certidao;

        foreach($this->quantidade as $qtd );

        $total += $qtd;

        echo $total;

    }





}