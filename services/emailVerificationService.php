<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MyFitJourney | Verificação Login</title>

        <link rel="stylesheet" href="../assets/css/verification.css" />
        <link rel="stylesheet" href="../assets/css/toast.css" />
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    </head>

    <body>
        <div class="container">
            <header>
                <i class="bx bxs-check-shield"></i>
            </header>
            <h4>Digite o código enviado ao seu e-mail</h4>
            <form method="POST">
                <div class="input-field">
                    <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required>
                    <input type="number" name="num1" />
                    <input type="number" name="num2" disabled />
                    <input type="number" name="num3" disabled />
                    <input type="number" name="num4" disabled />
                    <input type="number" name="num5" disabled />
                    <input type="number" name="num6" disabled />                
                </div>
                <button name="verify_email">Verificar e-mail</button>            
            </form>
            <div id="toast"></div>
        </div>
    </body>
</html>
<script src="../assets/js/toast.js" async></script>
<script src="../assets/js/verificationEmail.js" async></script>
<script src="../assets/js/accessibility.js"></script>

<?php

if (isset($_POST["verify_email"]))
{
    $email = $_POST["email"];
    // $verification_code = $_POST["verification_code"];
    $verification_code = $_POST["num1"] . $_POST["num2"] . $_POST["num3"] . $_POST["num4"] . $_POST["num5"] . $_POST["num6"];
    
    // Conexão com o banco
    $conn = mysqli_connect("localhost", "root", "", "myfitjourney");
    
    // Marcar e-mail como verificado
    $sql = "UPDATE tblusuario SET dtmVerificadoEm = NOW() 
    WHERE vchEmail = '" . $email . "' AND vchCodigo = '" . $verification_code . "'";
    $result  = mysqli_query($conn, $sql);
    
    if (!mysqli_affected_rows($conn) == 0) {
        $tipoMensagem = "Success";
        echo '<script>
                showToast("E-mail verificado com sucesso! Redirecionando...");
                document.getElementById("toast").classList.add("' . strtolower($tipoMensagem) . '");
                // Aguarda 1,75 segundos (1750 milissegundos) antes de redirecionar
                setTimeout(function() {
                    window.location.href = "../templates/login.php";
                }, 1750);
            </script>';
        exit();
    } else {
        $tipoMensagem = "Error";
        echo '<script>
            showToast("Erro: Código incorreto. Tente novamente");
            document.getElementById("toast").classList.add("' . strtolower($tipoMensagem) . '");
            </script>';
    }
}
?>
