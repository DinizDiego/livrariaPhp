<?php
    namespace PHP\MODELO; //Definir o local do projeto

    class Usuario{
        private string $cpf;
        private string $nome;        
        private string $endereco;
        private string $telefone;
        private string $dataDeNascimento;
        private string $login;
        private string $senha;

        // Armazenamento de usuários
        private static array $usuarios = [];

        //Construtor
        public function __construct(string $cpf, string $nome, string $endereco, string $telefone, string $dataDeNascimento, string $login, string $senha){

            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->dataDeNascimento = $dataDeNascimento;
            $this->login = $login;
            $this->senha = $senha;
        }//Fim do construtor

        // Métodos Get e Set
        public function __get(string $campo) {
            return $this->$campo;
        }

        public function __set(string $campo, string $valor) {
            $this->$campo = $valor;
        }

        //Método para imprimir
        public function imprimir():string
        {
            return  "<br>CPF: "              .$this->cpf. 
                    "<br>Nome: "              .$this->nome. 
                    "<br>Endereco: "          .$this->endereco.
                    "<br>Telefone: "          .$this->telefone.
                    "<br>Data de nascimento: ".$this->dataDeNascimento.
                    "<br>Login: "             .$this->login.
                    "<br>Senha: "             .$this->senha;
        }  
    }//Fim da classe
?>