<?php
namespace PHP\Modelo;

    class Compra {
        //Variáveis
        protected string $codigoCompra;
        protected string $descricao;
        protected string $dataCompra;
        protected float $valor;
        protected int $usuarioCpf;
        protected int $livroCodigo;
        protected int $admCpf;

        //Método Construtor
        public function __construct(string $codigoCompra, string $descricao, string $dataCompra, float $valor, int $usuarioCpf, int $livroCodigo, int $adm) {
            $this->codigoCompra = $codigoCompra;
            $this->descricao = $descricao;
            $this->dataCompra = $dataCompra;
            $this->valor = $valor;
            $this->usuarioCpf = $usuarioCpf;
            $this->livroCodigo = $livroCodigo;
            $this->admCpf = $admCpf;
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
                   "<br>Descrição: " .$this->descricao.
                   "<br>Data da compra: " .$this->dataCompra.
                   "<br>Valor: " .$this->valor.
                   "<br>CPF do Usuário: " .$this->usuarioCpf.
                   "<br>Código do livro: " .$this->livroCodigo.
                   "<br>CPF do adm: " .$this->admCpf;
        }//Fim do Imprimir
    }//Fim da classe
?>