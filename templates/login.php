<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>MyFitJourney | Login</title>    
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/toast.css">        
</head>
    
<body>
    <div class="container-login">
        <div class="img-box">
            <img id="inverter" src="../assets/img/login.svg">
        </div>
        <div class="content-box">
            <div class="form-box">                
                <h2>Login</h2>
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
                        <p>Não tem uma conta? <a href="register.php">Cadastre-se</a></p>
                    </div>
                </form>
                <div id="toast"></div>
            </div>
        </div>
    </div>
    
    <section id="accessibility-vlibras">
        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
        </div>
    </section>
</body>
</html>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script src="../assets/js/accessibility.js"></script>
<script src="../assets/js/accessibilityVlibras.js"></script>
<script src="../assets/js/toast.js"></script>

<?php
session_start();

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $_SESSION["email"] = $email;

    // Conexão com o banco
    $conn = mysqli_connect("localhost", "root", "", "myfitjourney");

    // Validação dos dados e e-mail verificado
    $sql = "SELECT * FROM tblusuario WHERE vchEmail = '" . $email . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {        
        echo '<script>
            showToast("Erro: E-mail não registrado ou incorreto");
            document.getElementById("toast").classList.add("error");
            </script>';
    } else {
        $user = mysqli_fetch_object($result);

        if (!password_verify($password, $user->vchSenha)) {            
            echo '<script>
                showToast("Erro: Senha incorreta");
                document.getElementById("toast").classList.add("error");
                </script>';
        } elseif ($user->dtmVerificadoEm == null) {            
            echo '<script>
                showToast("Aviso: Validação de e-mail pendente. Clique aqui para validar");                
                document.getElementById("toast").classList.add("warning");
                document.getElementById("toast").addEventListener("click", function() {
                redirectVerificationEmail("' . $email . '");
                });
            </script>';
        } else {            
            echo '<script>
                    showToast("Login efetuado com sucesso! Redirecionando...");
                    document.getElementById("toast").classList.add("success");
                    // Aguarda 1,75 segundos (1750 milissegundos) antes de redirecionar
                    setTimeout(function() {
                        window.location.href = "./home.php";
                    }, 1750);
                </script>';
            // header("Location: ./home.php");
            exit();
        }
    }
}
?>
