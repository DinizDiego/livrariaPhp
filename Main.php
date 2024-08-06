<?php
    namespace PHP\MODELO; //Definir o local do projeto

    require_once('Usuario.php');
    require_once('Livros.php');
    require_once('Compra.php');
    require_once('Reserva.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');

    use PHP\MODELO\DAO\Conexao;//Direcionar o arquivo
    use PHP\MODELO\DAO\Inserir;
    use PHP\MODELO\DAO\Consultar;
    use PHP\MODELO\DAO\Atualizar;
    use PHP\MODELO\DAO\Excluir;

    $conexao = new conexao();
    $consultar = new consultar();
    $inserir = new inserir();
    $atualizar = new atualizar();
    $excluir = new excluir();

    $conexao->conectar();
    

    $usuario1 = new Usuario("50794857765", "Diego", "Ruazinha", "11940209876", "12/10/2000", "user", "123456");
    $usuario2 = new Usuario("50794857763", "Diego", "Rua", "11940209872", "12/11/2000", "user2", "12345");

    //Adicionando usuários
    Usuario::adicionarUsuario($usuario1);
    Usuario::adicionarUsuario($usuario2);

    //Imprimindo todos usuários
    foreach (Usuario::obterUsuarios() as $usuario) 
    {
        echo $usuario->imprimir();
        echo "<br><br>";
    }//Fim do foreach

    //Criando livros
    $livro1 = new Livros('One Piece', 1997, 'Eiichiro Oda', '28,30', 1);

    //Imprimindo livros
    echo $livro1->imprimir();
    echo "<br><br>";

    //Criando compras
    $compra1 = new Compra('1112322185776835', 'Diego', '02/30', '344');

    //Imprimindo compras
    echo $compra1->imprimir();
    echo "<br><br>";

    //Criando reservas
    $reserva1 = new Reserva('One Piece', 'user1@teste.com', 2, '22/09');
                            
    //Imprimindo reservas
    echo $reserva1->imprimir();
    echo "<br><br>";

    $consultar->ConsultarIndividual($conexao
                                    'cpf',
                                    'nome',
                                    'endereco',
                                    'telefone',
                                    'dataDeNascimento',
                                    'login',
                                    'senha'
    );

    $consultar->ConsultarTudo($conexao
                              'usuario' 
    );                                    

    $atualizar->atualizarUsuario($conexao
                                'usuario'                                       
    );

    $excluir->excluirUsuario($conexao, 'cpf');
?>