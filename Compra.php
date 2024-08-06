<?php
namespace PHP\Modelo;

    class Compra {
        //Variáveis
        protected string $descricao;
        protected string $dataDaCompra;
        protected string $valor;
        protected string $cvv;

        //Método Construtor
        public function __construct(string $numeroCartao, string $nomeCartao, string $validade, string $cvv) {
            $this->numeroCartao = $numeroCartao;
            $this->nomeCartao = $nomeCartao;
            $this->validade = $validade;
            $this->cvv = $cvv;
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
            return "<br>Número do cartão: " . $this->numeroCartao .
                   "<br>Nome do titular do cartão: " . $this->nomeCartao .
                   "<br>Validade: " . $this->validade .
                   "<br>CVV: " . $this->cvv;
        }//Fim do Imprimir
    }//Fim da classe
?>