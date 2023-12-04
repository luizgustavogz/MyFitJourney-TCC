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

                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <img src="../assets/img/imc-calc.svg" alt="Image">
                </div>

                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <div class="form-container uk-container uk-margin-large-top">
                        <h3 class="uk-margin-bottom">Escolha seu objetivo! O programa ideal para encontrar sua melhor versão está aqui!</h3>

                        <form id="imcForm" class="uk-form-horizontal uk-margin-large-bottom">
                            <div class="uk-margin">
                            <label class="uk-form-label" for="weight">Peso atual (kg):</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="number" id="weight" required>
                            </div>
                            </div>

                            <div class="uk-margin">
                            <label class="uk-form-label" for="height">Altura (cm):</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="number" id="height" step="0.01" required>
                            </div>
                            </div>

                            <div class="uk-margin">
                            <label class="uk-form-label" for="goal">Qual é o seu objetivo?</label>
                            <div class="uk-form-controls">
                                <select class="uk-select" id="goal" required>
                                <option value="lose">Perder peso</option>
                                <option value="maintain">Manter peso</option>
                                <option value="gain">Ganhar peso</option>
                                </select>
                            </div>
                            </div>

                            <div class="uk-margin">                            
                            <label class="uk-form-label" for="age">Idade:</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="number" id="age" placeholder="Digite sua idade" required>
                            </div>
                            </div>

                            <div class="uk-margin uk-flex-center uk-text-center button-space">
                                <button type="button" class="uk-button uk-button-primary" onclick="calculateIMC()">Calcular IMC</button>
                            </div>
                        </form>

                        <div class="uk-alert resultado uk-text-center" hidden></div>
                            <p id="result" class="uk-text-center"></p>
                        </div>

                    </div>
        </div>
    </section>

    <section id="diet-meal-plan">
        <div class="uk-container uk-container-large">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2 class="uk-text-center">Qual o seu objetivo: emagrecer, ganhar massa magra e/ou  mudar a alimentação?</h2>
                    <p class="uk-text-center">Se um ou mais desses objetivos é o seu, você está no lugar certo! Com a Myfit Journey, as suas chances de alcançar a sua meta de corpo aumentam a cada semana e a garantia de mudança é fato. A gente tem  como comprovar:</p>
                    <div class="uk-text-center">
                        <img src="../assets/img/graph3.svg" alt="">
                    </div>
                </div>
                <div class="uk-width-1-2@m uk-text-center">
                    <img src="../assets/img/meal-plan-3.svg" alt="">
                </div>
            </div> 
            
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2>Metodologia MyFit Journey</h2>
                    <p>Deixe no passado as tentativas frustradas de ser mais saudável,
                        as dietas mirabolantes e os treinos sem resultados.
                        Confira como funcionam os programas do Tecnonutri.</p>
                </div>
                <div class="uk-width-1-2@m uk-flex-first">
                    <img src="../assets/img/meal-plan-4.svg" alt="">
                </div>
            </div>

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match cards" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .card; delay: 200; repeat: false">
                <div>
                    <div class="uk-card uk-card-default uk-card-body card">
                        <img src="../assets/img/card-diet-1.svg" width="110" alt="">
                        <h3 class="uk-card-title">Nada de desafios dolorosos</h3>
                        <p>As metodologias e programas são elaborados por um time de especialistas focado em tirar seu organismo da estagnação, se alimentando melhor, reprogramando seu corpo para queimar mais gordura e transformando-a em massa magra.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body card">
                        <img src="../assets/img/card-diet-2.svg"  width="110" alt="">
                        <h3 class="uk-card-title">Estamos com você nessa jornada</h3>
                        <p>Aqui, nós vamos te incentivar sempre. Você vai passar por um processo personalizado pela nossa equipe multidisciplinar, respeitando seus gostos, necessidades e evolução diária.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body card">
                        <img src="../assets/img/card-diet-3.svg"  width="110" alt="">
                        <h3 class="uk-card-title">Alcance seu objetivo sem sofrimento</h3>
                        <p>Tenha consultas online com o time de saúde, acesso a listas de compras, cardápios e receitas. Além de aulas ao vivo, conteúdos interativos, grupos com usuários, e diversos programas cuidadosamente pensados para que você atinja os seus objetivos, com diferentes metodologias para descobrir o que se adapta melhor à sua rotina e gostos pessoais.</p>
                    </div>
                </div>
            </div>

            <div class="uk-text-center card-middle">
                <a class="uk-button button-meal-cards" href="">Conheça nossos cardápios!</a>
            </div>
        </div>
    </section>

    <section id="chalenge-food">
        <div class="uk-container uk-container-large">
            <h2 class="uk-text-center">Programas exclusivos , <br> para alcançar sua melhor versão</h2>
            <p class="uk-text-center">Com os programas do Tecnonutri, você vai se sentir mais feliz com o seu corpo,<br>vai dar uma guinada na autoestima e aproveitar a vida de uma forma mais leve e ativa.</p>

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match cards" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body card">
                        <div class="uk-flex-middle" uk-grid>
                            <div class="uk-width-1-2@m">
                                <h3>Desafio <br>10 EM 2</h3>
                            </div>
                            <div class="uk-width-1-2@m ">
                                <img src="../assets/img/img-challenge-1.svg" alt="">
                            </div>
                        </div>
                        <p class="divisor-text">Realize as metas de ano novo e mude o seu estilo de vida neste verão. Emagreça até 10kg em 2 meses à base dos métodos Detox, Low Carb, Jejum intermitente e Keto, e potencialize o emagrecimento semanal.</p>

                        <p class="text-button">Detox, Low Carb, Jejum e Keto</p>
                        <p class="text-button">Emagreça até 10kg</p>
                        <p class="text-button">890 pessoas no programa</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body card">
                        <div class="uk-flex-middle" uk-grid>
                            <div class="uk-width-1-2@m">
                                <h3>Desafio <br> 15 em 3</h3>
                            </div>
                            <div class="uk-width-1-2@m ">
                                <img src="../assets/img/img-challenge-2.svg" alt="">
                            </div>
                        </div>
                        <p class="divisor-text">Elimine até 15kg em 3 meses com métodos comprovados de emagrecimento, que vão ativar a queima de gordura sem medo dos efeitos platô e sanfona para você aproveitar a vida de uma forma mais leve.</p>

                        <p class="text-button">Cinco métodos eficazes</p>
                        <p class="text-button">Até -6kg em pouco tempo</p>
                        <p class="text-button">Emagreça comendo de tudo</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body card">
                        <div class="uk-flex-middle" uk-grid>
                            <div class="uk-width-1-2@m">
                                <h3>Jejum <br> 7 em 6</h3>
                            </div>
                            <div class="uk-width-1-2@m ">
                                <img src="../assets/img/img-challenge-3.svg" alt="">
                            </div>
                        </div>
                        <p class="divisor-text">Se a meta é emagrecer 7kg em 6 semanas, alternando os horários das refeições e aprendendo a ter uma relação diferente com a comida para ativar a queima de gordura, o jejum intermitente é ideal para você.</p>

                        <p class="text-button">Cardápios estratégicos</p>
                        <p class="text-button">Até -3kg em uma semana</p>
                        <p class="text-button">Controle da saciedade</p>
                    </div>
                </div>
            </div>
            

            <div class="uk-text-center button-middle">
                <a href="" class="uk-button button-challenge">Quero uma vida mais leve!</a>
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
<script src="../assets/js/whatsapp-api-content.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script src="../assets/js/accessibility.js"></script>
<script src="../assets/js/accessibilityVlibras.js"></script>
<script src="../assets/js/footerMap.js"></script>
<script src="../assets/js/calculateIMC.js"></script>
