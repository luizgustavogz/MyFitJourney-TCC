<?php
session_start();

    // Conexão com o banco
    $conn = mysqli_connect("localhost", "root", "", "myfitjourney");

    $email = $_SESSION["email"];
    $sql = sprintf("SELECT vchNome, vchEmail FROM tblusuario WHERE vchEmail = '" . $email . "'");
    $result = mysqli_query($conn, $sql);
    $usuarios = mysqli_fetch_assoc($result);
    

    if (isset($_POST["pagamento"]))
    {
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $cep = $_POST["cep"];
        $nome_cartao = $_POST["nome_cartao"];
        $numero_cartao = $_POST["numero_cartao"];
        $cpf = $_POST["cpf"];
        $mes = $_POST["mes"];
        $ano = $_POST["ano"];
        $cvv = $_POST["cvv"];

        // insert na tabela de endereco
        $sql = "INSERT INTO tblendereco(vchEndereco, intNumero, vchBairro, vchCidade, vchEstado, vchCep) 
            VALUES ('" . $endereco . "', '" . $numero . "', '" . $bairro . "', '" . $cidade . "', '" . $estado . "', '" . $cep . "')";
        mysqli_query($conn, $sql);

        // insert na tabela de pagamento
        $sql = "INSERT INTO tblpagamento(vchNomeCartao, vchNumeroCartao, vchCpf, dtmMes, dtmAno, vchCvv) 
            VALUES ('" . $nome_cartao . "', '" . $numero_cartao . "', '" . $cpf . "', '" . $mes . "', '" . $ano . "', '" . $cvv . "')";
        mysqli_query($conn, $sql);

        header("Location: index.php");
        exit();
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    <link rel="stylesheet" href="../assets/css/payment.css">
</head>
<body>

<div class="container">
    <form method="POST">
        <div class="row">
            <div class="col">
                <h3 class="title">Endereço de pagamento</h3>
                
                <form method="GET">
                    <div class="inputBox">
                        <span>Nome completo:</span>
                        <input type="text" value="<?=$usuarios['vchNome']?>">
                    </div>
                    <div class="inputBox">
                        <span>E-mail:</span>
                        <input type="text" value="<?=$usuarios['vchEmail']?>">
                    </div>
                </form>
                <div class="inputBox">
                    <span>Endereço:</span>
                    <input type="text" name="endereco" placeholder="Rua Exemplo">
                </div>
                <div class="inputBox">
                    <span>Número:</span>
                    <input type="text" name="numero" placeholder="Número">
                </div>
                <div class="inputBox">
                    <span>Bairro:</span>
                    <input type="text" name="bairro" placeholder="Bairro">
                </div>
                <div class="inputBox">
                    <span>Cidade:</span>
                    <input type="text" name="cidade"  placeholder="São Paulo">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Estado:</span>
                        <input type="text" name="estado" placeholder="São Paulo">
                    </div>
                    <div class="inputBox">
                        <span>CEP:</span>
                        <input type="text" name="cep" placeholder="12345-678">
                    </div>
                </div>
            </div>

            <div class="col">
                <h3 class="title">Pagamento</h3>
                <div class="inputBox">
                    <span>Cartões aceitos:</span>
                    <img src="../assets/img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Nome no cartão:</span>
                    <input type="text" name="nome_cartao" placeholder="Exemplo S. Teste">
                </div>
                <div class="inputBox">
                    <span>Número no cartão:</span>
                    <input type="text" name="numero_cartao" placeholder="1111 2222 3333 4444" maxlength="19">                    
                </div>
                <div class="inputBox">
                    <span>CPF:</span>
                    <input type="text" name="cpf" placeholder="123.456.789-00" maxlength="14">
                </div>
                <span>Validade:</span>
                <div class="flex">
                    <div class="inputBox">                        
                        <input type="text" name="mes" placeholder="Mês" min="1" max="12" maxlength="2">                        
                    </div>
                    <div class="inputBox">                        
                        <input type="text" name="ano" placeholder="Ano" min="2000" max="2100" maxlength="4">
                    </div>                    
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>CVV:</span>
                        <input type="text" name="cvv" placeholder="123">
                    </div>
                </div>
            </div>

            <input type="submit" name="pagamento" value="Realizar pagamento" class="submit-btn">            
        </div>
    </form>
</div>    
</body>
<script src="../assets/js/acessibility.js"></script>
