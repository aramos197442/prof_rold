<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-php</title>
</head>
<body>
    <?php if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
        <div>
            Seu nome é: <?= $_GET['nome']?> <br>
            Sua senha é: <?= $_GET['senha']?> <br>
        </div>
    <?php } ?>

    <form action="form-controller.php" method="post">
        <input type="text" name="nome" placeholder="nome...">
        <input type="password" name="senha" placeholder="senha...">
        <input type="submit">
    </form>
</body>
</html>