<?php
    namespace PHP\Modelo\DAO;

    require_once("Conexao.php");
    
    use PHP\Modelo\DAO\Conexao;

    class Consultar{

        function ConsultarIndividual(
            Conexao $conexao,
            string  $nomeCampo,
            string  $nomeTabela,
            string  $codigo)
        {
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from $nometabela where $nomeCampo = '$codigo'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["codigo"] == $codigo){
                        echo "\nCodigo do usuário: " .$dados["codigo"].
                             "\nCPF: " .$dados["cpf"].
                             "\nNome: " .$dados["nome"].
                             "\nEndereco: " .$dados["endereco"].
                             "\nTelefone: " .$dados["telefone"].
                             "\nData de Nascimento: " .$dados["dtNascimento"].
                             "\nLogin: " .$dados["login"].
                             "\nSenha: " .$dados["senha"];
                        return;
                    }
                    echo "Código de usuário digitado não é válido!";        
                }//Fim do While
            }catch(Exception $erro){
                echo $erro;
            }//Fim do tryCatch
        }//Fim do método

        function ConsultarTudo(Conexao $conexao,
                               string $nomeTabela 
        ){
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from $nomeTabela";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>Código do usuário: " .$dados["codigo"].
                         "<br>CPF: " .$dados["cpf"].
                         "<br>Nome: " .$dados["nome"].
                         "<br>Telefone: " .$dados["telefone"].
                         "<br>Data de nascimento: " .$dados["dataNascimento"].
                         "<br>Login: " .$dados["login"].
                         "<br>Senha: " .$dados["senha"];
                }//Fim do While
            }catch(Exception $erro){
                echo $erro;
            }
        }//Fim do tryCatch



    }//Fim da classe
?>