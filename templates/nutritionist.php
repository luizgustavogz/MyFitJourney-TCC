<?php
// Iniciar a sessão (se ainda não estiver iniciada)
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}

// Conexão com o banco
$conn = mysqli_connect("localhost", "root", "", "myfitjourney");

$email = $_SESSION["email"];
$sql = "SELECT vchNome FROM tblusuario WHERE vchEmail = '" . $email . "'";
$result = mysqli_query($conn, $sql);

// Obter o nome do usuário da sessão
$nome = mysqli_fetch_array($result)["vchNome"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitJourney | Dietas</title>
    <link rel="stylesheet" href="../assets/css/index.scss">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">        
</head>
<body>
    <section id="menu-nav-home-banner">
        <nav class="uk-navbar-container">
            <div class="uk-container uk-container-large">
                <div uk-navbar>

                    <div class="uk-navbar-left logo-header-home">                        
                        <a class="uk-navbar-item uk-logo logo-header" href="home.php" aria-label="Back to Home">
                            <img src="../assets/img/heart-beat-logo.svg" width="55">
                            MyFit<strong>Journey</strong>
                        </a>
                    </div>

                    <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav">
                            <li>
                                <a class="link" href="about.php">
                                    <span class="uk-icon uk-margin-small-right"></span>
                                    Sobre
                                </a>
                            </li>
                            <li>
                                <a class="link" href="workout.php">
                                    <span class="uk-icon uk-margin-small-right"></span>
                                    Treinos
                                </a>
                            </li>
                            <li>
                                <a class="link" href="diet.php">
                                    <span class="uk-icon uk-margin-small-right"></span>
                                    Dietas
                                </a>
                            </li>
                            <li>
                                <a class="link" href="nutritionist.php">
                                    <span class="uk-icon uk-margin-small-right"></span>
                                    Fale com nossos Nutricionistas
                                </a>
                            </li>
                            <li>
                                <a class="link" href="store.php">
                                    <span class="uk-icon uk-margin-small-right" ></span>
                                    Loja
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item">
                            <p>Bem-vindo, <strong><?php echo $nome;?></strong>!</p>
                            <img src="../assets/img/user-id.svg" width="45">
                            <form action="javascript:void(0)">
                                <a href="../services/logoutService.php" class="uk-button uk-button-logout">Sair</a>
                            </form>
                        </div>    
                    </div>

                </div>
            </div>
        </nav>
    </section>

    <section id="hp-banner-header">
        <div class="uk-container uk-container-large">
            <div class="uk-flex-middle" uk-grid>

                <div class="uk-width-1-2@m" >
                    <h1>Construindo um Futuro Mais Saudável Através da Nutrição</h1>
                    <p>Buscamos melhorar a qualidade de vida dos pacientes por meio de escolhas alimentares equilibradas e personalizadas, promovendo saúde e bem-estar.</p>
                    <a href="https://api.whatsapp.com/send?phone=+5411985974082&text=Olá%2C+gostaria+de+agendar+uma+consultoria+online+pela+MyFitJourney%21%21" target="_blank" class="uk-button uk-button-default button-nutritionist-banner"><img src="../assets/img/whatsapp.svg" width="20" alt="Image"> Agendar uma consulta</a>
                </div>

                <div class="uk-width-1-2@m uk-text-center">
                    <img src="../assets/img/nutrition.svg" width="600" alt="Image">
                </div>
        </div>
    </section>

    <section id="about-team-nutrition">
        <div class="uk-container uk-container-large">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2>Equipe de Nutricionistas Especializados somente na Myfit Journey !!</h2>
                    <p>Ao escolher a Myfit Journey, você está optando por uma equipe de nutricionistas apaixonada, experiente e comprometida com o seu sucesso. Estamos aqui para guiá-lo em sua jornada de saúde, ajudando-o a atingir seus objetivos e construir hábitos alimentares sustentáveis para toda a vida. Juntos, vamos moldar seu caminho para uma vida saudável e vibrante.</p>
                    <p>Na Myfit Journey, compreendemos a importância crucial da nutrição para alcançar e manter um estilo de vida saudável. Nossa equipe de nutricionistas é uma força motriz por trás do sucesso de inúmeros indivíduos que embarcaram em jornadas transformadoras em direção ao bem-estar. Aqui, apresentamos a você a equipe de profissionais altamente qualificados que compõem o núcleo da nossa abordagem holística para a saúde.</p>
                    <a href="https://api.whatsapp.com/send?phone=+5411985974082&text=Olá%2C+gostaria+de+agendar+uma+consultoria+online+pela+MyFitJourney%21%21" target="_blank" class="uk-button uk-button-default button-nutritionist-team"><img src="../assets/img/whatsapp.svg" width="20" alt="Image"> Falar com nossos especialistas</a>
                </div>
                <div class="uk-width-1-2@m uk-flex-first">
                    <img src="../assets/img/nutritionists-2.svg" width="600" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <section id="customized-solutions">
        <div class="uk-container uk-container-large">
            <div class="" uk-grid>
                <div class="uk-width-1-3@m">
                    <p class="banner-custom-solution">NOSSOS TRATAMENTOS</p>
                    <h2>Conheça as soluções personalizadas para você</h2>
                    <p>Da prevenção ao tratamento de doenças</p>
                </div>
                <div class="uk-width-2-3@m">
                    <div class="uk-card uk-card-default uk-card-body uk-width-1@m">
                        <div class="uk-flex-middle" uk-grid>
                            <div class="uk-width-1-4@m uk-flex-first uk-text-center">
                            <img src="../assets/img/custom-solution-4.svg" width="70" alt="Image">
                            </div>

                            <div class="uk-width-3-4@m">
                                <h3>Nutrição e Câncer</h3>
                                <p>A alimentação desempenha um papel vital na prevenção, tratamento e recuperação do câncer. Uma dieta personalizada pode fortalecer o sistema imunológico, reduzir riscos de recidiva, aliviar efeitos colaterais e fornecer energia durante o tratamento.</p>
                            </div>
                        </div>
                    </div>

                    <div class="uk-card uk-card-default uk-card-body uk-width-1@m">
                        <div class="uk-flex-middle" uk-grid>
                            <div class="uk-width-1-4@m uk-flex-first uk-text-center">
                            <img src="../assets/img/custom-solution-3.svg" width="70" alt="Image">
                            </div>

                            <div class="uk-width-3-4@m">
                                <h3>Nutrição funcional</h3>
                                <p>Utilizar de alimentos funcionais para prevenção e tratamento de doenças, como problemas digestivos, modulação intestinal, doenças autoimunes, distúrbios tireoidianos e cuidado adequado em saúde da mulher.</p>
                            </div>
                        </div>
                    </div>

                    <div class="uk-card uk-card-default uk-card-body uk-width-1@m">
                        <div class="uk-flex-middle" uk-grid>
                            <div class="uk-width-1-4@m uk-flex-first uk-text-center">
                            <img src="../assets/img/custom-solution-2.svg" width="70" alt="Image">
                            </div>

                            <div class="uk-width-3-4@m">
                                <h3>Nutrição e Reeducação Alimentar</h3>
                                <p>A reeducação alimentar é um compromisso de longo prazo com a saúde. Ela permite alcançar e manter uma composição corporal saudável, melhorar a energia diária, reduzir riscos de doenças crônicas e estabelecer uma relação equilibrada com a comida.</p>
                            </div>
                        </div>
                    </div>

                    <div class="uk-card uk-card-default uk-card-body uk-width-1@m">
                        <div class="uk-flex-middle" uk-grid>
                            <div class="uk-width-1-4@m uk-flex-first uk-text-center">
                            <img src="../assets/img/custom-solution-1.svg" width="70" alt="Image">
                            </div>

                            <div class="uk-width-3-4@m">
                                <h3>Nutrição e Cirurgias Gastrointestinais</h3>
                                <p>A nutrição desempenha uma função fundamental antes e depois de cirurgias gastrointestinais. Uma nutrição adequada prepara o corpo, auxilia na cicatrização, reduz desconfortos e fornece os nutrientes essenciais necessários para a recuperação.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="site-support">
        <div class="uk-container uk-container-large">

            <h2 class="uk-text-center">Melhore sua saúde de qualquer lugar</h2>

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <img src="../assets/img/support.svg" width="70" alt="Image">
                        <h3 class="uk-card-title">Suporte Contínuo</h3>
                        <p>Estamos disponíveis no WhatsApp para responder a qualquer pergunta que possa surgir em relação à sua nutrição e saúde.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <img src="../assets/img/custom-solution-1.svg" width="70" alt="Image">
                        <h3 class="uk-card-title">Educação Nutricional</h3>
                        <p>Fornecemos orientações educacionais para ajudá-lo a entender os princípios da nutrição e como aplicá-los em sua vida cotidiana.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <img src="../assets/img/computer-device.svg" width="70" alt="Image">
                        <h3 class="uk-card-title">Consultas Online</h3>
                        <p>Consultas personalizadas para melhorar sua saúde e alcançar seus objetivos, tudo conveniente e acessível de onde você estiver</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="accessibility-vlibras">
        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
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
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="../assets/js/whatsapp-api-content.js"></script>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script src="../assets/js/accessibility.js"></script>
<script src="../assets/js/accessibilityVlibras.js"></script>
<script src="../assets/js/footerMap.js"></script>
