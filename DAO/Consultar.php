<?php
    namespace PHP\Modelo\DAO;
    require_once("Conexao.php");
    use PHP\Modelo\DAO\Conexao;

    class Consultar{

        function ConsultarIndividual(
            Conexao $conexao,
            string $nomeCampo,
            string $nomeTabela,
            string $codigo)
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from $nometabela where $nomeCampo = '$codigo'"
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cpf"] == $codigo){
                        echo "\nCPF: ".$dados{"cpf"}.
                             "\nNome: ".$dados{"nome"}.
                             "\nEndereco: ".$dados{"endereco"}.
                             "\nTelefone: ".$dados{"telefone"}.
                             "\nData de Nascimento: ".$dados{"dtNascimento"}.
                             "\nLogin: ".$dados{"login"}.
                             "\nSenha: ".$dados{"senha"};
                        return;
                    }
                    echo "CPF digitado não é válido!";        
                }//Fim do While
            }catch(Exception $erro){
                echo $erro;
            }//Fim do tryCatch
        }//Fim do método

        function ConsultarTudo(Conexao $conexao,
                               string $nomeTabela 
        ){
            try{
                $conn = $conexao->();
                $sql  = "select * from $nomeTabela";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>CPF: ".$dados["cpf"].
                }//Fim do While
            }catch(Exception $erro){
                echo $erro;
            }
        }//Fim do tryCatch



    }//Fim da classe
?>