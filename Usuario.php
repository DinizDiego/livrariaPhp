<?php
    namespace PHP\MODELO; //Definir o local do projeto

    class Usuario{
        private string $nome;        
        private string $endereco;
        private string $telefone;
        private string $dataDeNascimento;
        private string $login;
        private string $senha;

        //Construtor
        public function __construct(string $nome, string $endereco, string $telefone, string $dataDeNascimento, string $login, string $senha){

            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->dataDeNascimento = $dataDeNascimento;
            $this->login = $login;
            $this->senha = $senha;
        }//Fim do construtor

        public function getNome():string
        {
            return $this->nome;
        }//Fim do get nome

        public function getEndereco():string
        {
            return $this->endereco;
        }//Fim do get endereco

        public function getTelefone():string
        {
            return $this->telefone;
        }//Fim do get telefone

        public function getDataDeNascimento():string
        {
            return $this->dataDeNascimento;
        }//Fim do get dataDeNacimento
        
        public function getLogin():string
        {
            return $this->login;
        }//Fim do get login
        
        public function getSenha():string
        {
            return $this->senha;
        }//Fim do get senha

        ///////////////////////
        
        public function setNome(string $nome):void
        {
            $this->nome = $nome;
        }//Fim do get nome
        
        public function setEndereco(string $endereco):void
        {
            $this->endereco = $endereco;
        }//Fim do get endereco

        public function setTelefone(string $telefone):void
        {
            $this->telefone = $telefone;
        }//Fim do get telefone

        public function setDataDeNascimento($dataDeNascimento):string
        {
            $this->dataDeNascimento = $dataDeNascimento;
        }//Fim do get dataDeNascimento

        public function setLogin(string $login):void
        {
            $this->login = $login;
        }//Fim do get login

        public function setSenha(string $senha):void
        {
            $this->senha = $senha;
        }//Fim do get senha

        public function imprimir():string
        {
            return  "<br>Nome: "              .$this->getNome(). 
                    "<br>Endereco: "          .$this->getEndereco().
                    "<br>Telefone: "          .$this->getTelefone().
                    "<br>Data de nascimento: ".$this->getDataDeNascimento().
                    "<br>Login: "             .$this->getLogin().
                    "<br>Senha: "             .$this->getSenha();
        }

        function validarUsuario($resposta1, $resposta2, $login, $senha){
            if(($resposta1 <> $login) && ($resposta2 <> $senha)){            
                return "Usuário inválido! Verifique login ou senha e tente novamente."
            }else{
                return "Logado com sucesso!"
            }//FIm do ifElse       
        }//Fim do validarUsuario

    }//Fim da classe


?>