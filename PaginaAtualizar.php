<?php
    namespace PHP\Modelo\DAO;
    require_once('DAO\Conexao.php');
    require_once('DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;


?>

<!Doctype html>
    <head>
        <meta charset="UTF-8">
        <title>Página Atualizar</title>
    <head>
<body>
    <form method="POST">
        <label>Código:</label>
        <input type="number" name="codigo" id="codigo"/><br>

        <label>campo:</label>
        <select name="atualizacao">
            <option value="nome">Nome</option>
            <option value="telefone">Telefone</option>
            <option value="endereco">Endereco</option>
        </select><br><br>


    <label>Novo Dado: </label>
    <input type="text" name="novoDado" id="novoDado"/><br><br>

    <button type="submit"> Atualizar
        <?php
        $conexao = new Conexao();
        $codigo = $_POST['codigo'];
        $campo = $_POST['atualizacao'];
        $novoDado = $_POST['novoDado'];

        $atualizar = new Atualizar();
        echo $atualizar->atualizarPessoa($conexao,$campo,$novoDado,$codigo)

            ?>
        </button>
    </form>
    <br><br>
        <a href="menu.php"><button>Voltar</button></a>
    </body>
</html>