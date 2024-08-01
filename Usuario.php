<?php
    namespace PHP\MODELO; //Definir o local do projeto

    class Usuario{
        private string $nome;        
        private string $endereco;
        private string $telefone;
        private string $dataDeNascimento;
        private string $login;
        private string $senha;

        // Armazenamento de usuários
        private static array $usuarios = [];

        //Construtor
        public function __construct(string $nome, string $endereco, string $telefone, string $dataDeNascimento, string $login, string $senha){

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
            return  "<br>Nome: "              .$this->nome. 
                    "<br>Endereco: "          .$this->endereco.
                    "<br>Telefone: "          .$this->telefone.
                    "<br>Data de nascimento: ".$this->dataDeNascimento.
                    "<br>Login: "             .$this->login.
                    "<br>Senha: "             .$this->senha;
        }    

        // Método para adicionar um usuário
        public static function adicionarUsuario(Usuario $usuario) {
            self::$usuarios[] = $usuario;
        }//Fim do adcionar usuário

        // Método para obter todos os usuários
        public static function obterUsuarios(): array {
            return self::$usuarios;
        }//Fim do obter todos usuários

        // Método para encontrar um usuário por login
        public static function encontrarUsuarioPorLogin(string $login): ?Usuario {
            foreach (self::$usuarios as $usuario) {
                if ($usuario->login === $login) {
                    return $usuario;
                }
            }
            return null;
        }//Fim do encontrar por login

        // Método para atualizar um usuário
        public static function atualizarUsuario(string $login, array $novosDados): bool {
            $usuario = self::encontrarUsuarioPorLogin($login);
            if ($usuario) {
                foreach ($novosDados as $campo => $valor) {
                    $usuario->__set($campo, $valor);
                }
                return true;
            }
            return false;
        }//Fim do atualizar usuário

        // Método para deletar um usuário
        public static function deletarUsuario(string $login): bool {
            foreach (self::$usuarios as $key => $usuario) {
                if ($usuario->login === $login) {
                    unset(self::$usuarios[$key]);
                    return true;
                }
            }
            return false;
        }//Fim do deletar usuário

        // Método para validar login
        public static function validarLogin(string $login, string $senha): bool {
            $usuario = self::encontrarUsuarioPorLogin($login);
            return $usuario && $usuario->senha === $senha;
        }
    }//Fim da classe


?>