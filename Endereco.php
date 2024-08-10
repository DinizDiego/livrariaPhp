<?php
    namespace PHP\Modelo;

    class Endereco{
        private int $codigo;
        private string $logradouro;
        private int $numero;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private string $uf;
        private string $pais;
        private string $cep;

        public function __construct(string $logradouro,int $numero,string $bairro,string $cidade,string $estado,string $uf,string $pais,string $cep)
        {
            $this->codigo     = $codigo;
            $this->logradouro = $logradouro;
            $this->numero     = $numero;
            $this->bairro     = $bairro;
            $this->cidade     = $cidade;
            $this->estado     = $estado;
            $this->uf         = $uf;
            $this->pais       = $pais;
            $this->cep        = $cep;
        }//fim do construtor

        //métodos de acesso
        public function __get(string $nome){
            return $nome;
        }//fim do get genérico

        public function __set(string $nome, string $valor):void{
            $this->nome = $valor;
        }//fim do set genérico

        public function imprimir():string{
            return  "<br>Código do endereco: ".$this->codigo.
                    "<br>Logradouro: ".$this->logradouro.
                    "<br>Número: ".$this->numero.
                    "<br>Bairro: ".$this->bairro.
                    "<br>Cidade: ".$this->cidade.
                    "<br>Estado: ".$this->estado.
                    "<br>UF: ".$this->uf.
                    "<br>País: ".$this->pais.
                    "<br>CEP: ".$this->cep;
        }//fim do método
    }//fim da classe
?>