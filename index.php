<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Login</title>
</head>

<body class="imagem-2">
    <div class="">
        <div class="formulario-entrar bg-dark">
            <h2 class="text-light mb-3">Bem-vindo a Barber Fast!</h2>
            <form action="validaLogin.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-light">Usuário: </label>
                    <input type="text" class="form-control" id="usuario" aria-describedby="emailHelp" required name="usuario">                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-light">Senha: </label>
                    <input type="password" class="form-control" id="pwd" required name="senha">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <a href="cadastro.php" class="btn btn-primary" type="submit">Cadastrar</a>
        </div>

    </div>
</body>

</html>