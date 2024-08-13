<?php
    namespace PHP\MODELO\DAO;

    class Conexao{

        function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','livrariaPhpp');
                if($conn){
                    echo "Conectado com sucesso!";
                    //return $conn;
                }
                echo "<br>Algo deu errado!";
            }catch(Except $erro){
                return $erro;
            }//Fim do tryCatch
        }//Fim do método conectar


    }//Fim da classe
?>