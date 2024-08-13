<?php
namespace PHP\Modelo;

    class Compra {
        //Variáveis
        protected string $codigoCompra;
        protected string $descricao;
        protected string $dataCompra;
        protected int    $clienteCodigo;

        //Método Construtor
        public function __construct(string $codigoCompra, string $descricao, string $dataCompra, int $codigoCliente)
        {
            $this->codigoCompra = $codigoCompra;
            $this->descricao    = $descricao;
            $this->dataCompra   = $dataCompra;
            $this->clienteCodigo = $clienteCodigo;
        }//Fim do construtor

        //Métodos Get e Set
        public function __get(string $campo) {
            return $this->$campo;
        }

        public function __set(string $campo, string $valor) {
            $this->$campo = $valor;
        }//Fim do getSet

        //Método imprimir
        public function imprimir(): string {
            return "<br>Código da compra: " .$this->codigoCompra.
                   "<br>Descrição: "        .$this->descricao.
                   "<br>Data da compra: "   .$this->dataCompra.
                   "<br>Código do cliente: " .$this->clienteCodigo;
        }//Fim do Imprimir
    }//Fim da classe
?>