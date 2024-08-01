<?php
    namespace PHP\modelo;

    class Reserva {
        protected string $produto;
        protected string $email;
        protected int $quantidade;
        protected string $dataDaReserva;
    
        //Método construtor
        public function __construct(string $produto, string $email, int $quantidade, string $dataDaReserva) {
            $this->produto = $produto;
            $this->email = $email;
            $this->quantidade = $quantidade;
            $this->dataDaReserva = $dataDaReserva;
        }//Fim do construtor
    
        //Método getSet
        public function __get(string $campo) {
            return $this->$campo;
        }
    
        public function __set(string $campo, string $valor) {
            $this->$campo = $valor;
        }
    
        //Método imprimir
        public function imprimir(): string {
            return "<br>Produto: " . $this->produto.
                   "<br>E-mail: " . $this->email.
                   "<br>Quantidade: " . $this->quantidade.
                   "<br>Data da reserva: " . $this->dataDaReserva;
        }//Fim do imprimir
    }//Fim da classe
?>