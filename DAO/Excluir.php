<?php
    namespace PHP\MODELO\DAO;

    require_once('Conexao.php')

    use PHP/MODELO/DAO/Conexao;

    class Excluir{

        function ExcuirCliente(
            Conexao $conexao,
            string $cpf
        )
        {
            try{
                $conn = $conexao->conectar();
                $sql = "dele from funcionario where cpf = '$cpf'";
                $result= mysqli_query($conn,$sql);

                mysqli_close($conn);
                if($result){
                    echo "Excluído com sucesso!";
                }else{
                    echo "Não foi possível excluir!";
                }
            }catch(Exception $erro){
                echo $erro
            }//Fim do tryCatch
        }//Fim fo método
    }//Fim da classe
?>
