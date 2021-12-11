<?php 
    include_once './conexao.php';
?>

<?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    var_dump($dados);
    $inserir = "INSERT INTO `tbAniversariante` (id, nome, dataNiver, recebeMail, recebeParabens) VALUES (NULL, '".$dados['nome']."', '".$dados['aniversario']."', '".$dados['recebeMail']."', '".$dados['recebeParabens']."')";
    $cad_usuario=$conn->prepare($inserir);
    $cad_usuario->execute();
    

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>NiverMail v0.1</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">ANIVERSARIANTES</a>
    </nav>

    <div class="container margem">
        <form name="Cadastro" method="POST" action="">
            <div class="row">
                <div class="col-6 form-group">
                    <label for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" placeholder="Insira o nome...">
                </div>
                <div class="col-6 form-group">
                    <label for="aniversario">Data Nascimento:</label>
                    <input class="form-control" type="date" name="aniversario"
                        placeholder="Insira a data de nascimento...">
                </div>
                <div class="col-6 form-group">
                    <input class="form-check-input" type="checkbox" value="" id="recebeMail" name="recebeMail">
                    <label class="form-check-label" for="recebeMail"> 
                        Recebe e-mail de aniversariantes do dia
                    </label>
                </div>
                <div class="col-6 form-group">
                    <input class="form-check-input" type="checkbox" value="" id="recebeParabens" name="recebeParabens">
                    <label class="form-check-label" for="recebeParabens">
                        Recebe e-mail de parabéns
                    </label>
                </div>
            </div>
            <div class="form-group">
                <input class="form-control btn btn-primary" type="submit">
            </div>
        </form>
    </div>
</body>

</html>
