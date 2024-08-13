<?php
    namespace PHP\MODELO\DAO;

    require_once("Conexao.php");
    require_once('Endereco.php');

    use PHP\MODELO\DAO\Conexao;
    use PHP\MODELO\Endereco;

    class inserir{
        public Conexao $conexao;
        public string  $codigo;
        public string  $cpf;        
        public string  $nome;        
        public string  $endereco;
        public string  $telefone;
        public string  $dataNascimento;
        public string  $login;
        public string  $senha;

        function cadastrar(
            Conexao $conexao,
            int $codigo,
            string $cpf,
            string $nome,
            string $telefone,
            string $dataNascimento,
            string $login,
            string $senha,
            int $codigoEndereco
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "Insert into
                 (codigo, cpf, nome, telefone, dataNascimento, login, senha, enderecoCodigo)
                 values ('$codigoCliente', '$cpf', '$nome', '$endereco', '$telefone', '$dataNascimento', '$login', '$senha', '$enderecoCodigo')";
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

        function cadastrarEndereco(
            Conexao $conexao,
            int $codEndereco,
            string $logradouro,
            int $numero,
            string $bairro,
            string $cidade,
            string $estado,
            string $uf,
            string $pais,
            string $cep
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql = "insert into endereco (codigo, logradouro, 
                numero, bairro, cidade, estado, uf, pais, cep) values
                ('$codEndereco', '$logradouro', '$numero', '$bairro', '$cidade',
                '$estado', '$uf', '$pais', '$cep')";
                $result = mysqli_query($conn,$sql);

                //Fecha a conexao
                mysqli_close($conn);

                if($result){
                    "<br>Endereço inserido com sucesso!";
                }
                "<br>Impossível inserir";
            }catch(Exception $erro){
                echo $erro;
            }
        }//Fim do método


    }//Fim da classe

?>