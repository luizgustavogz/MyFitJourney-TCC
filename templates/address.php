<?php
session_start();

// Conexão com o banco
$conn = mysqli_connect("localhost", "root", "", "myfitjourney");

$email = $_SESSION["email"]; 
$sql = sprintf("SELECT intIdUsuario, vchNome, vchEmail FROM tblusuario WHERE vchEmail = '" . $email . "'");
$result = mysqli_query($conn, $sql);
$usuarios = mysqli_fetch_assoc($result);
?>

<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyFitJourney | Endereço</title> 
        <link rel="stylesheet" href="../assets/css/index.scss">
        <link rel="stylesheet" href="../assets/css/footer.css">
        <link rel="stylesheet" href="../assets/css/address.css">
        <link rel="stylesheet" href="../assets/css/toast.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
</head>
<body>
    <section id="menu-nav-home-banner">
        <nav class="uk-navbar-container">
            <div class="uk-container uk-container-large">
                <div uk-navbar>
                    
                    <div class="uk-navbar-left logo-header-home">                        
                        <a class="uk-navbar-item uk-logo logo-header" href="store.php" aria-label="Back to Home">
                            <img src="../assets/img/heart-beat-logo.svg" width="55">
                            MyFit<strong>Journey</strong>
                        </a>
                    </div>
                    
                    <!-- <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav">
                            <li>
                                <a class="link" href="workout.php">
                                    <span class="uk-icon uk-margin-small-right"></span>
                                    Loja
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item">
                            <form action="javascript:void(0)">
                                <a href="../services/logoutService.php" class="uk-button uk-button-logout">Sair</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <section id="address-section">
        <div class="container">
            <form method="POST">
                <div class="row">
                    <div class="col">
                        <h3 class="title">Endereço de faturamento</h3>
                        
                        <form method="GET">
                            <div class="inputBox">
                                <span>Nome:</span>
                                <input type="text" value="<?=$usuarios['vchNome']?>">
                            </div>
                            <div class="inputBox">
                                <span>E-mail:</span>
                                <input type="text" value="<?=$usuarios['vchEmail']?>">
                            </div>
                        </form>
                        <div class="inputBox">
                            <span>Endereço:</span>
                            <input type="text" name="endereco" placeholder="Rua Exemplo" required>
                        </div>
                        <div class="inputBox">
                            <span>Número:</span>
                            <input type="text" name="numero" placeholder="Número" maxlength="6" required>
                        </div>
                        <div class="inputBox">
                            <span>Bairro:</span>
                            <input type="text" name="bairro" placeholder="Bairro" required>
                        </div>
                        <div class="inputBox">
                            <span>Cidade:</span>
                            <input type="text" name="cidade"  placeholder="São Paulo" required>
                        </div>
                        <div class="flex">
                            <div class="inputBox">
                                <span>Estado:</span>
                                <input type="text" name="estado" placeholder="São Paulo" required>
                            </div>
                            <div class="inputBox">
                                <span>CEP:</span>
                                <input type="text" name="cep" placeholder="12345-678" maxlength="9" required>
                            </div>
                            <div class="inputBox">
                                <span>Complemento (Opcional):</span>
                                <input type="text" name="complement" placeholder="Apto nº">
                            </div>
                        </div>
                    </div>
                    
                    <input type="submit" name="addEndereco" value="Cadastrar endereço" class="submit-btn">
                    <a href="store.php" class="submit-btn-2">Cancelar</a>
                    <p>Já possui endereço cadastrado? <a href="payment.php">Clique aqui</a></p>
                </div>
            </form>
            <div id="toast"></div>
        </div>
    </section>

    <footer>
        <div class="container-footer">
            <div class="row-footer">
                <div class="footer-col">
                    <h4>MyFitJourney</h4>
                    <div class="medias-socias">
                        <a href="https://www.instagram.com/myfitjourneyreal"><img src="../assets/img/instagram-icon.svg"></img></a>
                        <a href="https://twitter.com/myfitjourneyofc"><img src="../assets/img/twitter-icon.svg"></img></a>
                        <a href="https://www.linkedin.com/in/luiz-gustavo-oliveira-cunha-a9b329176/"><img src="../assets/img/linkedin-icon.svg"></img></a> 
                        <a href="https://www.facebook.com/profile.php?id=61550970016109"><img src="../assets/img/facebook-icon.svg"></img></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Informações</h4>
                    <ul>
                        <li><a href="./about.php">Sobre</a></li>
                        <li><a href="./store.php">Loja</a></li>
                        <li><a href="./payment.php">Pagamento</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Serviços</h4>
                    <ul>
                        <li><a href="./workout.php">Treinos</a></li>
                        <li><a href="./diet.php">Dietas</a></li>
                        <li><a href="./nutritionist.php">Nutricionistas</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Nosso endereço:</h4>                    
                    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                        <script>
                            (function () {
                                var setting = {"query":"Avenida da Liberdade, 899 - Liberdade, São Paulo - State of São Paulo, Brazil","width":300,"height":200,"satellite":false,"zoom":12,"placeId":"ChIJi9nxv6VZzpQRmTpKInfOmbo","cid":"0xba99ce77224a3a99","coords":[-23.5607673,-46.63771339999999],"lang":"en","queryString":"Avenida da Liberdade, 899 - Liberdade, São Paulo - State of São Paulo, Brazil","centerCoord":[-23.5607673,-46.63771339999999],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"996185"};
                                var d = document;
                                var s = d.createElement('script');
                                s.src = 'https://1map.com/js/script-for-user.js?embed_id=996185';
                                s.async = true;
                                s.onload = function (e) {
                                window.OneMap.initMap(setting)
                                };
                                var to = d.getElementsByTagName('script')[0];
                                to.parentNode.insertBefore(s, to);
                            })();
                        </script><a href="https://1map.com/map-embed">1 Map</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>
<script src="../assets/js/accessibility.js"></script>
<script src="../assets/js/toast.js"></script>
<script src="../assets/js/validateCep.js"></script>

<?php
    if (isset($_POST["addEndereco"]))
    {
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $cep = $_POST["cep"];
        $complement = $_POST["complement"];
        $idUsuario = $usuarios["intIdUsuario"];

        // VALIDAÇÕES //
            
        // Validar endereco
        if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ ]+$/u", $endereco)) {
            echo '<script>
                    showToast("Erro: O endereço não pode conter números.");
                    document.getElementById("toast").classList.add("error");
            </script>';
            exit();
        }
        
        // Validar numero
        if (!preg_match("/^[0-9]+$/", $numero)) {
            echo '<script>
                    showToast("Erro: O número deve conter apenas dígitos.");
                    document.getElementById("toast").classList.add("error");
            </script>';
            exit();
        }

        // Validar bairro
        if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ ]+$/u", $bairro)) {
            echo '<script>
                    showToast("Erro: O bairro não pode conter números.");
                    document.getElementById("toast").classList.add("error");
            </script>';
            exit();
        }

        // Validar cidade
        if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ ]+$/u", $cidade)) {
            echo '<script>
                    showToast("Erro: O cidade não pode conter números.");
                    document.getElementById("toast").classList.add("error");
            </script>';
            exit();
        }

        // Validar estado
        if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ ]+$/u", $estado)) {
            echo '<script>
                    showToast("Erro: O estado não pode conter números.");
                    document.getElementById("toast").classList.add("error");
            </script>';
            exit();
        }

        // Conexão com o banco
        $conn = mysqli_connect("localhost", "root", "", "myfitjourney");

        // Verifica se o usuário já possui endereço
        $sqlEnderecoExistente = "SELECT * FROM tblendereco WHERE intIdUsuario = '$idUsuario'";
        $resultEnderecoExistente = mysqli_query($conn, $sqlEnderecoExistente);

        if (mysqli_num_rows($resultEnderecoExistente) > 0) {
            // Usuário já possui um endereço cadastrado            
            echo '<script>
                    showToast("Erro: Usuário já possui um endereço cadastrado.");
                    document.getElementById("toast").classList.add("error");
                </script>';
            exit();
        } else {
            // insert na tabela de endereco
            $sql = "INSERT INTO tblendereco(vchEndereco, intNumero, vchBairro, vchCidade, vchEstado, vchCep, vchComplemento, intIdUsuario)
            VALUES ('" . $endereco . "', '" . $numero . "', '" . $bairro . "', '" . $cidade . "', '" . $estado . "', '" . $cep . "', '" . $complement ."', '" . $idUsuario . "')";
            mysqli_query($conn, $sql);

            echo '<script>
                    showToast("Endereço cadastrado com sucesso! Redirecionando...");
                    document.getElementById("toast").classList.add("success");
                    // Aguarda 1,75 segundos (1750 milissegundos) antes de redirecionar
                    setTimeout(function() {
                        window.location.href = "./payment.php";
                    }, 1750);
                </script>';
            exit();
        }
    }
?>