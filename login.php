<?php     
    if (isset($_POST["login"]))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
 
        // Conexão com o banco
        $conn = mysqli_connect("localhost", "root", "", "myfitjourney");
 
        // Validação dos dados e e-mail verificado
        $sql = "SELECT * FROM tblusuario WHERE vchEmail = '" . $email . "'";
        $result = mysqli_query($conn, $sql);
 
        if (mysqli_num_rows($result) == 0)
        {            
            die('<script>
            alert("E-MAIL NÃO REGISTRADO OU INCORRETO.\nTENTE NOVAMENTE");
            window.location="./login.php";
            </script>');
        }
 
        $user = mysqli_fetch_object($result);
 
        if (!password_verify($password, $user->vchSenha))
        {            
            die('<script>
            alert("SENHA INCORRETA\nTENTE NOVAMENTE");
            window.location="./login.php";
            </script>');            
        }
        
        if ($user->dtmVerificadoEm == null)
        {
            die('<script>
            alert("VALIDAÇÃO DE E-MAIL PENDENTE.\nPOR FAVOR, VALIDE SEU E-MAIL PARA REALIZAR O LOGIN AQUI:");
            window.location="emailVerification.php?email=' . $email . '";
            </script>');
        }

        header("Location: ./index.php");
        exit();
    }
?>

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link rel="stylesheet" href="./assets/css/login.css">
        <title>MyFitJourney | Login</title>
</head>
    
<body>
    <div class="container-login">
        <div class="img-box">
            <!-- <img src="./assets/img/login.svg"> -->
            <img id="inverter" src="./assets/img/runner.png">
        </div>
        <div class="content-box">
            <div class="form-box">
                <h2>MyFitJourney</h2>
                <h3>Login</h3>
                <form method="POST">
                    <div class="input-box">
                        <span>E-mail</span>
                        <input type="email" name="email" placeholder="@gmail.com" required />
                    </div>

                    <div class="input-box">
                        <span>Senha</span>
                        <input type="password" name="password" placeholder="****" required />
                    </div>                    
                    
                    <div class="input-box">
                        <input type="submit" name="login" value="Entrar">
                    </div>

                    <div class="input-box">
                        <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
