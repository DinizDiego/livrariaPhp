<?php
    namespace PHP\modelo;

    class Reserva {
        protected int    $codigoReserva;
        protected string $dataReserva;
        protected string $descricaoReserva;
        protected int    $clienteCodigo;
        protected int    $livroCodigo;
    
        //Método construtor
        public function __construct(int $codigoReserva, string $dataReserva, int $descricaoReserva, int $clienteCodigo, int $livroCodigo) 
        {
            $this->codigoReserva    = $codigoReserva;
            $this->dataReserva      = $dataReserva;
            $this->descricaoReserva = $descricaoReserva;
            $this->clienteCodigo    = $clienteCodigo;
            $this->livroCodigo      = $livroCodigo;
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
            return "<br>Código da reserva: "    . $this->codigoReserva.
                   "<br>Data da reserva: "      . $this->dataReserva.
                   "<br>Descrição da reserva: " . $this->descricaoReserva.
                   "<br>Código do cliente: "    . $this->clienteCodigo.
                   "<br>Codigo do livro: "      . $this->livroCodigo;
        }//Fim do imprimir
    }//Fim da classe
?>