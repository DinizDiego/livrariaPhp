<?php
    namespace PHP\MODELO\DAO;

    require_once("Conexao.php");

    use PHP\MODELO\DAO\Conexao;

    class inserir{
        public Conexao $conexao;
        public string $tabela;
        public string $cpf;        
        public string $nome;        
        public string $endereco;
        public string $telefone;
        public string $dataDeNascimento;
        public string $login;
        public string $senha;
        public int $admCpf;

        function __construct(Conexao $conexao, string $tabela, string $nome, string $endereco, string $telefone, string $dataDeNascimento, string $login, string $senha, int $admCpf){
            
            $this->conexao = $conexao
            $this->tabela = $tabela
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->dataDeNascimento = $dataDeNascimento;
            $this->login = $login;
            $this->senha = $senha;
            
        }//Fim do construtor

        function cadastrar(){
            try{
                $conn = $conexao->conectar();
                $sql  = "insert into
                 (cpf, nome, endereco, telefone, dataDeNascimento, login, senha, admCpf)
                 values ('')"
                 $result = mysqli_query($conn, $sql);

                 //fecha a conexão
                 mysqli_close($conn);

                 if($result){
                    return "Inserido com sucesso!";
                 }
                    return "Não inserido!";
            }catch(Except $erro){
                return $erro;
            }
        }//Fim do método

        function cadastrarEndereco()
        {
            try{




            }catch(Exception $erro){
                echo $erro;
            }
        }//FIm do método


    }//Fim da classe

?>