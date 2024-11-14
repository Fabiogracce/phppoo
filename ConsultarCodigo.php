<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;
?>


<!Doctype html>
    <head>
        <meta charset="UTF-8"/>
        <title>Pagina de consulta</title>
    <head>
        <form method="POST">
            <label>Codigo: </label>
            <input type="number" name="codigo" id="codigo"><br><br>

            <button type="submit">
                consultar
                <?php
                    //conexao com o bco
                    $conexao = new conexao();

                    //coletar codigo
                    $codigo = $_POST['codigo'];

                    //chamar o consultar
                    $consultar = new Consultar();
                    $consultar->consultarIndividual($conexao,$codigo);
                ?>
                

            </button>
        </form>
        <br><br>
        <a href="menu.php"><button>Voltar</button></a>
    </body>
</html>            