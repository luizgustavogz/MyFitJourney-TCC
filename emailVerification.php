<?php 
    if (isset($_POST["verify_email"]))
    {
        $email = $_POST["email"];
        $verification_code = $_POST["verification_code"];
        
        // Conexão com o banco
        $conn = mysqli_connect("localhost", "root", "", "myfitjourney");
        
        // Marcar e-mail como verificado
        $sql = "UPDATE tblusuario SET dtmVerificadoEm = NOW() 
        WHERE vchEmail = '" . $email . "' AND vchCodigo = '" . $verification_code . "'";
        $result  = mysqli_query($conn, $sql);
        
        if (mysqli_affected_rows($conn) == 0)
        {
            die('<script>
            alert("CÓDIGO INCORRETO.\nTENTE NOVAMENTE");
            window.location="emailVerification.php?email=' . $email . '";
            </script>');
        }
            
        // header("Location: login.php?email=" . $email);
        header("Location: login.php");
        exit();
    }
?>

<form method="POST">
    <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required>
    <input type="text" name="verification_code" placeholder="Enter verification code" required />     
    <input type="submit" name="verify_email" value="Verify Email">
</form>
