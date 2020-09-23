<?php

abstract class Contrato implements Emissao
{
                        // ATRIBUTOS DA CLASSE

    protected $numeroregistro;
    protected $nometitular;
    protected $testemunha1;
    protected $testemunha2;
    protected $tipo;
    protected $dataemissao;
    protected $datareg;
    protected $nometabeliao;
    protected $nomecartorio;
    protected $quantidade;



                        // DEFININDO METODO CONSTRUTOR 


    public function __construct($numeroregistro, $nometitular, $testemunha1, $testemunha2, $tipo, $dataemissao, $datareg, $nometabeliao, $nomecartorio)
    {
        $this->numeroregistro = $numeroregistro;
        $this->nometitular = $nometitular;
        $this->testemunha1 = $testemunha1;
        $this->testemunha2 = $testemunha2;
        $this->tipo = $tipo;
        $this->dataemissao = $dataemissao;
        $this->datareg = $datareg;
        $this->nometabeliao = $nometabeliao;
        $this->nomecartorio = $nomecartorio;
    }

                        // METODO PARA CALCULAR A QUANTIDADE

    public function calcularTotal(Emissao $contrato)
    {
        $total = 0;

        $this->quantidade[] = $contrato;

        foreach($this->quantidade as $qtd );

        $total += $qtd;

        echo $total;

    }

}
