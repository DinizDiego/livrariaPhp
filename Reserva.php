<?php
    namespace PHP\modelo;

    class Reserva {
        protected int $codigoReserva;
        protected string $dataReserva;
        protected string $descricaoReserva;
        protected int $clienteCpf;
        protected int $livroCodigo;
        protected int $admCpf;
    
        //Método construtor
        public function __construct(int $codigoReserva, string $dataReserva, int $descricaoReserva, int $clienteCpf, int $livroCodigo, int $admCpf) {
            $this->codigoReserva = $codigoReserva;
            $this->dataReserva = $dataReserva;
            $this->descricaoReserva = $descricaoReserva;
            $this->clienteCpf = $clienteCpf;
            $this->livroCodigo = $livroCodigo;
            $this->admCpf = $admCpf;
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
            return "<br>Código da reserva: " . $this->codigoReserva.
                   "<br>Data da reserva: " . $this->dataReserva.
                   "<br>Descrição da reserva: " . $this->descricaoReserva.
                   "<br>CPF do cliente: " . $this->clienteCpf.
                   "<br>Codigo do livro: " . $this->livroCodigo.
                   "<br>CPF do adm: " . $this->admCpf;
        }//Fim do imprimir
    }//Fim da classe
?>