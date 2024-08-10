<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    
    class Atualizar{

        function atualizarFuncionario(
            Conexao $conexao,
            string  $campo,
            string  $novoDado,
            string  $cpf
        ){
            try{
                $conn = $conexao->conectar();
                $sql = "update client set
                        $campo = '$novoDado' where cpf = '$cpf'";
                $result = mysqli_query($conn, $aql);
                
                mysqli_close($conn);
                if($result){
                    echo "<br><br>Atualizado com sucesso!"
                }else{
                    "<br><br>Não foi possível atualizar!"
                }//Fim do if

            }catch(Exception $erro){
                echo $erro;
            }//Fim do tryCatch
        }//Fim do método



    }//Fim da classe
?>