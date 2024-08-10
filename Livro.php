<?php
    namespace PHP\MODELO; //Definir o local do projeto

    Class Livros{
        protected int    $codigoLivro;
        protected string $titulo;
        protected int    $ano;
        protected string $autor;
        protected float  $preco;
        protected int    $quantidade;
        protected int    $admCodigo;

        //Método Construtor
        public function __construct(int $codigoLivro, string $titulo, int $ano, string $autor, string $preco, int $quantidade, int $admCodigo) {
            $this->codigoLivro = $codigoLivro;
            $this->titulo      = $titulo;
            $this->ano         = $ano;
            $this->autor       = $autor;
            $this->preco       = $preco;
            $this->quantidade  = $quantidade;
            $this->admCodigo   = $admCodigo;
        }//Fim do método construtor

        //Métodos Get e Set
        public function __get(string $campo) {
            return $this->$campo;
        }

        public function __set(string $campo, string $valor) {
            $this->$campo = $valor;
        }

        //Método imprimir
        public function imprimir(): string {
            return  "<br>Código do livro: "            .$this->codigoLivro.
                    "<br>Título do livro: "            .$this->titulo.
                    "<br>Ano de publicação do livro: " .$this->ano.
                    "<br>Autor: "                      .$this->autor.
                    "<br>Preço unitário: "             .$this->preco.
                    "<br>Quantidade: "                 .$this->quantidade.
                    "<br>Código do adm: "              .$this->admCodigo;
        }//Fim do imprimir

    }//Fim da class Livros

?>