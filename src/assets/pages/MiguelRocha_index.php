<?php
// Verificar os dados que irão para a tabela BD [Útil para fazer uma agenda em PHP]
if (isset($_POST['submit'])) {
    print_r($_POST['nome']); // Printar na tela com o id html
    print_r('<br>'); // Quebrando linha
    print_r($_POST['cpf']);
    print_r('<br>');
    print_r($_POST['tel']);
    print_r('<br>');
    print_r($_POST['email']);

    include_once('/src/assets/components/sql/MiguelRocha_conexao.php'); // Incluindo conexão

    // Declarando as variáveis para a tabela BD
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    // Result = Levar todos os dados do PHP para a tabela no BD
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, cpf, tel, email) 
    VALUES ('$nome', '$cpf', '$tel', '$email')");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/assets/types/index.css">
    <title>Document</title>
</head>

<body>
    <main>
        <section id="novo_usuario">
            <div class="container">
                <div class="header">
                    <h1>Cadastro de Usuários - MySQL</h1>
                </div>
                <div class="navbar-left">
                    <h2>Menu de Opções</h2>
                    <ul>
                        <li><a href="#"></a>Página Incial</li>
                        <li><a href="/src/assets/pages/MiguelRocha_index.php"></a>Novo Usuário</li>
                        <li><a href="/src/assets/pages/MiguelRocha_lista.php"></a>Listar Usuários</li>
                    </ul>
                </div>
                <div>
                    <form action="/src/assets/pages/MiguelRocha_index.php" method="POST">
                        <h1>Novo Usuário</h1>
                        <br>
                        <span>Nome: </span>
                        <input type="text" name="nome" id="nome" class="inputUser" required> <!-- Id igual do BD -->
                        <br>
                        <span>CPF: </span>
                        <input type="text" name="cpf" id="cpf" class="inputUser" required> <!-- Id igual do BD -->
                        <br>
                        <span>Telefone: </span>
                        <input type="tel" name="tel" id="tel" class="inputUser" required> <!-- Id igual do BD -->
                        <br>
                        <span>E-mail: </span>
                        <input type="text" name="email" id="email" class="inputUser" required> <!-- Id igual do BD -->
                        <br>
                        <input type="submit" name="submit" id="submit"> <!-- Botão de submit dentro do formulário -->
                    </form>
                </div>
            </div>
            </div>
        </section>
    </main>
</body>

</html>