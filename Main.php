<?php
    namespace PHP\MODELO; //Definir o local do projeto

    require_once('Usuario.php');
    require_once('Livros.php');
    require_once('Compra.php');
    require_once('Reserva.php');
    require_once('DAO/Conexao.php');

    use PHP\MODELO\DAO\Conexao;//Direcionar o arquivo

    $conexao = new conexao();
    $conexao->conectar();
    

    $usuario1 = new Usuario("Diego", "Ruazinha", "11940209876", "12/10/2000", "user", "123456");
    $usuario2 = new Usuario("Diego", "Rua", "11940209872", "12/11/2000", "user2", "12345");

    //Adicionando usuários
    Usuario::adicionarUsuario($usuario1);
    Usuario::adicionarUsuario($usuario2);

    //Imprimindo todos usuários
    foreach (Usuario::obterUsuarios() as $usuario) 
    {
        echo $usuario->imprimir();
        echo "<br><br>";
    }//Fim do foreach

    //Validando login
    $loginValido = Usuario::validarLogin('user', '123456');
    echo $loginValido ? "Logado com sucesso user.<br>" : "Login inválido para user. Verifique nome de Usuário ou senha e tente novamente.<br>";
    echo "<br><br>";

    $loginValido = Usuario::validarLogin('user', '12345');
    echo $loginValido ? "Logado com sucesso user2.<br>" : "Login inválido para user2. Verifique nome de Usuário ou senha e tente novamente.<br>";
    echo "<br><br>";

    //Atualizando usuário
    Usuario::atualizarUsuario('user', ['endereco' => 'Rua', 'telefone' => '11987997634']);

    //Imprimindo usuário atualizado
    echo $usuario1->imprimir();
    echo "<br><br>";

    //Deletando um usuário
    Usuario::deletarUsuario('user');  

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

?>