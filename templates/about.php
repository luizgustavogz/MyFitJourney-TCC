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
    <title>MyFitJourney | Sobre</title>
    <link rel="stylesheet" href="../assets/css/index.scss">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/about.css">
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
        <div id="toast"></div>
    </section>

    <section id="hp-banner-header">
        <div class="uk-container uk-container-large">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h1>Sobre nós:<br> Entenda a ideia, motivação<br>e metodologia do projeto</h1>
                    <p>Sinta-se à vontade para entender sobre o projeto <br> e descobrir nossas motivações para criar a MyFitJourney!
                    <strong><br>Veja os tópicos a seguir:</strong></p>
                    
                    <div class="uk-margin box-subscription" uk-margin>
                        <a href="#porque"><button class="uk-button uk-button-default button-2">Por quê?</button></a>
                        <a href="#tema"><button class="uk-button uk-button-default button-1">Tema</button></a>
                        <a href="#objetivo"><button class="uk-button uk-button-default button-2">Objetivo</button></a>
                    </div>
                    <div class="uk-margin box-subscription" uk-margin>
                        <a href="#fundamentacao"><button class="uk-button uk-button-default button-1">Fundamentação</button></a>
                        <a href="#justificativa"><button class="uk-button uk-button-default button-2">Justificativa</button></a>                        
                    </div>
                </div>
                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <img src="../assets/img/banner-about-3.svg" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <section id="about-section">
        <div class="uk-container uk-container-large">
        <br><br><br><br><br><br><br>
            <div class="uk-flex-middle" uk-grid id="porque" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                <div class="uk-width-1-2@m">
                    <h2 class="uk-text-center">Por que MyFitJourney?</h2>
                    <p class="uk-text-center">A tradução do nome "MyFitJourney" significa Minha Jornada Fit, para que a pessoa que ainda não tomou a 
                        decisão de começar sua jornada de uma vida mais saudável ou até aquelas que já fazem, possam ter essas informações e aprendam 
                        mais sobre como melhorar o seu bem-estar com treinos e dietas. Mesmo em casa, ou até mesmo numa academia ou ao ar livre, a MyFitJourney
                        está aqui para auxiliar trazendo informações verídicas e comprovadas cientificamente para todos.</p>
                </div>
                <div class="uk-width-1-2@m uk-text-center" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <img src="../assets/img/banner-about-4.svg" alt="">
                </div>
            </div> 
            <br><br><br><br><br><br><br>
            <div class="uk-flex-middle" uk-grid id="tema">
                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <h2 class="uk-text-center">Nosso Tema</h2>
                    <p class="uk-text-center">O nosso tema se trata de uma preocupação que vem cada vez mais ganhando espaço nos últimos anos, a preocupação com a saúde e o bem estar das 
                        pessoas principalmente depois da pandemia do Covid 19 que tivemos se intensificou significativamente no mundo inteiro. Com a facilidade de como
                         se corre a informação nos dias de hoje vem se tornando cada vez mais alarmante a preocupação com esse ponto, já que tivemos essa mudança na 
                         cabeça das pessoas causadas pelo isolamento e a mudança de rotina da pandemia, devido à essa facilidade em obter informações nos dias de hoje,
                          as mudanças no estilo de vida para uma rotina mais saudável vem se tornando cada vez mais normal, com uma maior conscientização sobre a importância
                           da nutrição adequada e alertas sobre doenças relacionadas ao sedentarismo têm motivado cada vez mais pessoas a buscar maneiras de adotar um estilo de vida mais saudável.
                        A falta de conhecimento, recursos e orientação adequada dificulta a adoção de um estilo de vida saudável. Diante desse cenário, o problema que nosso projeto busca abordar
                         é facilitar a abordagem e o entendimento dessas informações para indivíduos comuns entenderem a real importância desse assunto sem precisar fazer uma busca tão complexa,
                          levando informações importantes de uma maneira rápida e fácil.
                    </p>
                </div>
                <div class="uk-width-1-2@m uk-flex-first" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <img src="../assets/img/banner-about.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="about-section-2">
        <div class="uk-container uk-container-large">
            <div class="uk-flex-middle" uk-grid id="objetivo">
                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h2 class="uk-text-center">Nosso Objetivo</h2>
                    <p class="uk-text-center">O nosso principal objetivo do site é promover um estilo de vida saudável, conscientizando as pessoas sobre a importância da alimentação saudável e estimulando
                         a prática de atividades físicas, com o intuito de contribuir para o bem-estar e a qualidade de vida. Além disso, o site busca oferecer um ambiente educativo e inspirador onde os 
                         visitantes possam encontrar informações confiáveis e baseadas em evidências científicas sobre saúde, nutrição e exercícios, o site também abordará os benefícios de uma alimentação
                          saudável, como perda de peso, redução do risco de câncer, gestão de diabetes, saúde do coração e prevenção do AVC e conseguir uma boa noite de sono. Também compartilhará 
                          informações sobre diferentes tipos de treinos, incluindo treinamento de força, definição, funcional, hipertrofia e cardiovascular, juntamente com rotinas de treino e dicas para 
                          maximizar os resultados, tudo com o propósito de ajudar as pessoas a manterem um estilo de vida saudável.
                    </p>
                </div>
                <div class="uk-width-1-2@m uk-text-center" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <img src="../assets/img/banner-about-2.svg" alt="">
                </div>
            </div>
            <br><br><br><br><br><br><br>
            <div class="uk-flex-middle" uk-grid id="fundamentacao">
                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <h2 class="uk-text-center">Fundamentação teórica</h2>
                    <p class="uk-text-center">A importância de estudar o problema de saúde e qualidade de vida, refletida na criação de um site dedicado a esse propósito, é evidente em diversos aspectos.
                        Em primeiro lugar, o impacto na qualidade de vida das pessoas é uma das principais razões para investigar a questão da saúde. A saúde desempenha um papel central na qualidade de 
                        vida de indivíduos de todas as idades. Compreender esse problema é essencial para aprimorar a saúde e o bem-estar, possibilitando que as pessoas vivam vidas mais longas e mais saudáveis.
                        A criação de um site fitness dedicado à saúde e ao bem-estar desempenha um papel crucial na melhoria da qualidade de vida, na prevenção de doenças crônicas, como diabetes, doenças 
                        cardíacas e obesidade, e no fomento do bem-estar psicológico das pessoas. Este projeto tem o potencial de impactar positivamente a vida de inúmeras pessoas, permitindo-lhes viver vidas 
                        mais saudáveis e plenas. Portanto, a investigação desse problema é essencial para a promoção de um estilo de vida mais saudável e feliz para indivíduos em todo o mundo.
                    </p>
                </div>
                <div class="uk-width-1-2@m uk-flex-first" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <img src="../assets/img/banner-about-5.svg" alt="">
                </div>
            </div>        
        </div>
    </section>

    <section id="about-section-3">
        <div class="uk-container uk-container-large">
            <div class="uk-flex-middle" uk-grid id="justificativa">
                <div class="uk-width-1-2@m"uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h2 class="uk-text-center">Justificativa</h2>
                    <p class="uk-text-center">É importante se estudar esse problema devido aos seguintes pontos. O primeiro é criar um impacto na qualidade de vida das pessoas, a saúde desempenha um papel central
                        na qualidade de vida das pessoas e compreender esse problema é essencial para melhorar a saúde e o bem-estar, permitindo que as pessoas vivam vidas mais longas e saudáveis. Junto com a saúde
                        é importante também na prevenção de doenças como diabetes, doenças cardíacas e obesidade e no bem-estar psicológico que é um ponto muito importante na saúde das pessoas, pois a saúde mental
                        e o bem-estar emocional são impactados pela qualidade de vida.
                    </p>
                </div>
                <div class="uk-width-1-2@m uk-text-center" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <img src="../assets/img/banner-about-6.svg" alt="">
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
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>
<script src="../assets/js/scrollIntoView.js"></script>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script src="../assets/js/accessibility.js"></script>
<script src="../assets/js/accessibilityVlibras.js"></script>
<script src="../assets/js/footerMap.js"></script>
<script src="../assets/js/toast.js"></script>
