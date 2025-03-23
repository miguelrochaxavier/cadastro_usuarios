<?php
// Incluir o arquivo de conexão
include_once('MiguelRocha_conexao.php');

// Listar usuários
$query = "SELECT * FROM usuarios";
$result = mysqli_query($conexao, $query);
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
        <section>
            <div class="container">
                <div class="header">
                    <h1>Cadastro de Usuários - MySQL</h1>
                </div>
                <div class="navbar-left">
                    <h2>Menu de Opções</h2>
                    <ul>
                        <li><a href="#"></a>Página Incial</li>
                        <li><a href="/MiguelRocha_index.php"></a>Novo Usuário</li>
                        <li><a href="/MiguelRocha_listar.html"></a>Listar Usuários</li>
                    </ul>
                </div>
                <div>
                    <form action="MiguelRocha_index.php" method="POST">
                        <h1>Listar Usuários</h1>
                        <br>
                        <span>{id} Usuários cadastrados</span>
                        <section id="listar_usuarios">
                            <div class="tabela">
                                <table border="1">
                                    <tr>
                                        <th id="table-id">Id</th>
                                        <th id="table-nome">Nome</th>
                                        <th>CPF</th>
                                        <th>Telefone</th>
                                        <th id="table-nome">E-mail</th>
                                        <th>Opções</th>
                                    </tr>
                                    <?php while ($row = mysqli_fetch_assoc($result)): ?> <!--Tirar do BD e manipular e devolver para a web-->
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['nome']; ?></td>
                                            <td><?php echo $row['cpf']; ?></td>
                                            <td><?php echo $row['tel']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><a href="">Editar | Excluir</a></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </table>
                            </div>
                        </section>
                </div>
            </div>
            </div>
        </section>
    </main>
</body>

</html>