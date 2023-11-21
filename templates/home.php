<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitJourney | Home</title>
    <link rel="stylesheet" href="../assets/css/index.scss">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default" defer></script>    
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js" defer></script>
</head>
<body>
    <section id="menu-nav-home-banner">
        <nav class="uk-navbar-container">
            <div class="uk-container uk-container-large">
                <div uk-navbar>

                    <div class="uk-navbar-left">

                        <a class="uk-navbar-item uk-logo logo-header" href="home.php" aria-label="Back to Home">MyFit<strong>Journey</strong></a>
                    </div>
                    <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav">                            
                            <li>
                                <a class="link" href="store.php">
                                    <span class="uk-icon uk-margin-small-right" ></span>
                                    Loja
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
                                <a class="link" href="payment.php">
                                    <span class="uk-icon uk-margin-small-right"></span>
                                    Pagamento
                                </a>
                            </li>
                        </ul>
                    </div>

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

    <section id="hp-banner-header">
        <div class="uk-container uk-container-large">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h1>Seja bem-vindo(a)!<br> Vamos começar uma<br>vida mais saudável?</h1>
                    <p>Sinta-se à vontade para elaborar planos alimentares, treinos diversificados e <br> consultar nossos nutricionistas! <strong>Planeje o futuro da sua saúde e bem-estar!</strong></p>
                    
                    <div class="uk-margin box-subscription" uk-margin>
                        <a href="./diet.php"><button class="uk-button uk-button-default button-1">Dietas</button></a>
                        <a href="./workout.php"><button class="uk-button uk-button-default button-2">Treinos</button></a>
                        <a href="./nutritionist.php"><button class="uk-button uk-button-default button-1">Nutricionista</button></a>
                    </div>
                    
                </div>
                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <img src="../assets/img/banner-home-3.svg" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <section id="hp-about-us">
        <div class="uk-container uk-container-large">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h2>A importância de ter <strong>uma boa Dieta</strong></h2>
                    <p>
                        Em uma jornada de saúde e bem-estar, a elaboração de um bom plano alimentar é fundamental para alcançar objetivos sustentáveis e duradouros. 
                        A MyFit Journey compreende a importância crucial desse componente na busca por uma vida mais saudável. Ao oferecer planos alimentares personalizados, 
                        consideramos não apenas as metas individuais de cada usuário, mas também fatores como preferências alimentares, restrições e necessidades específicas. 
                        Essa abordagem personalizada não apenas otimiza os resultados físicos, mas também contribui para a formação de hábitos alimentares saudáveis e duradouros.
                    </p>

                    <p>
                        Nosso objetivo é fornecer recursos, informações e orientações práticas para ajudar as pessoas a fazer escolhas conscientes em relação à sua alimentação, 
                        atividade física e saúde mental. Acreditamos que a prevenção é a chave para um futuro mais saudável e estamos empenhados em capacitar nossos visitantes a trilhar esse caminho.
                    </p>
                    <br>
                    <a href="./diet.php">Elaborar uma Dieta agora!</a>
                </div>
                <div class="uk-width-1-2@m uk-text-center" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <img src="../assets/img/diet-plan.svg" alt="Image">
                </div>
            </div>            
        </div>
    </section>

    <section id="hp-services-offered">
        <div class="uk-container">
            <h1 class="uk-text-center">Como funciona a Calculadora TDEE + TMB + Macros?</h1>

            <p class="uk-text-center">
                Uma calculadora de Taxa de Gasto Energético Total (TDEE) é uma ferramenta útil para ajudar as pessoas a entenderem melhor suas necessidades calóricas diárias. 
                A TMB (Taxa Metabólica Basal) diz respeito ao gasto energético em repouso de nosso corpo. 
                A TDEE representa a quantidade total de calorias que uma pessoa queima em um dia, levando em consideração seu nível de atividade física e características individuais, 
                como: idade, sexo, peso e altura.
                <br>TDEE = TMB * nível de atividade física
            </p>
        </div>

        <div class="uk-container uk-margin-large-top calculator-section">

            <h2 class="uk-margin-medium-bottom uk-text-center">Calculadora TDEE + TMB + Macros</h2>

            <form id="tdeeForm" class="uk-grid">

                <div class="uk-width-1-2@m">
                    <div class="uk-margin">
                    <label class="uk-form-label" for="gender">Gênero:</label>
                    <select class="uk-select" id="gender" required>
                        <option value="male">Masculino</option>
                        <option value="female">Feminino</option>
                        <option value="nonbinarie">Não binário</option>
                    </select>
                    </div>
                    <div class="uk-margin">
                    <label class="uk-form-label" for="age">Idade:</label>
                    <input class="uk-input" type="number" id="age" placeholder="Digite sua idade" required>
                    </div>
                    <div class="uk-margin">
                    <label class="uk-form-label" for="weight">Peso (kg):</label>
                    <input class="uk-input" type="number" id="weight" placeholder="Digite seu peso" required>
                    </div>
                </div>

                <div class="uk-width-1-2@m">
                    <div class="uk-margin">
                    <label class="uk-form-label" for="height">Altura (cm):</label>
                    <input class="uk-input" type="number" id="height" placeholder="Digite sua altura" required>
                    </div>
                    <div class="uk-margin">
                    <label class="uk-form-label" for="activityLevel">Nível de Atividade Física:</label>
                    <select class="uk-select" id="activityLevel" required>
                        <option value="sedentary">Sedentário (Exercício mínimo)</option>
                        <option value="lightlyActive">Levemente Ativo (1~3 dias por semana)</option>
                        <option value="moderatelyActive">Moderadamente Ativo (3~5 dias por semana)</option>
                        <option value="veryActive">Muito Ativo (6~7 dias por semana)</option>
                        <option value="extremelyActive">Extremamente Ativo (Atleta, 2x por dia)</option>
                    </select>
                    </div>
                </div>

                <div class="uk-width-1-1 uk-flex uk-flex-center button-middle">

                    <button class="uk-button uk-button-primary button-calculator" type="button" onclick="calculateTDEE()">Calcular</button>

                </div>

            </form>

            <!-- Resultados serão exibidos aqui -->
            <div id="resultSection" class="uk-margin-top" style="display:none;">
            <h4>Resultados:</h4>
            <p id="tmbResult"></p>
            <p id="tdeeResult"></p>
            <p id="macrosResult"></p>
            </div>
        </div>

    </section>

    <section id="box-feedback">
        <div class="uk-container uk-container-large">

            <h2 class="title-home uk-text-center">Planejamento Alimentar</h2>
            <p class="text-home uk-text-center">Uma boa e saudável alimentação representa 80% de uma vida saudável, não fique de fora <br> do planejamento da sua saúde e elabore agora um plano alimentar baseado no seu objetivo</p>

            <p class="text-home uk-text-center"><strong>Selecione a categoria da dieta abaixo:</strong></p>

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 200; repeat: true">
                <div>
                    <div class="uk-card  uk-card-body cards-feedback uk-text-center cards-new-home" >
                        <img src="../assets/img/emagrecimento.jpg" alt="" srcset="">
                        <a class="uk-button uk-button-default button-card-diet" href="./diet.php">Emagrecimento</a>
                    </div>
                </div>
                <div>
                    <div class="uk-card  uk-card-body cards-feedback uk-text-center cards-new-home">
                        <img src="../assets/img/ganho-massa-2.jpg" alt="" srcset="">
                        <a class="uk-button uk-button-default button-card-diet" href="./diet.php">Ganho de Massa</a>
                    </div>
                </div>
                <div>
                    <div class="uk-card  uk-card-body cards-feedback uk-text-center cards-new-home">
                        <img src="../assets/img/manter-peso.jpg" alt="" srcset="">
                        <a class="uk-button uk-button-default button-card-diet" href="./diet.php">Manter no Peso</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-trainners">

        <div class="uk-container uk-container-large">

            <h2 class="uk-text-center">Escolha seu <strong>Treino agora!</strong></h2>
            <p class="uk-text-center">Planeje suas atividades de acordo com os objetivos que deseja atingir! <br> Lembre-se ter um bom cuidado com a saúde é fundamental, não só <br> para fins estéticos, mas para bem-estar e uma vida mais saudável</p>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true; autoplay-interval: 1700" >

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                    <li class="uk-text-center container-slide">
                        <div class="uk-panel">
                            <img src="../assets/img/cardio.svg" alt="" srcset="">
                            <a href="./workout.php">Cardiovascular</a>
                        </div>
                        
                    </li>
                    <li class="uk-text-center container-slide">
                        <div class="uk-panel">
                            <img src="../assets/img/treino-de-definicao.svg" alt="" srcset="">
                            <a href="./workout.php">Definição</a>
                        </div>
                    </li>
                    <li class="uk-text-center container-slide">
                        <div class="uk-panel">
                            <img src="../assets/img/treino-de-força.svg" alt="" srcset="">
                            <a href="./workout.php">Força</a>
                        </div>
                    </li>
                    <li class="uk-text-center container-slide">
                        <div class="uk-panel">
                            <img src="../assets/img/treino-hiit.svg" alt="" srcset="">
                            <a href="./workout.php">Funcional</a>
                        </div>
                    </li>
                    <li class="uk-text-center container-slide">
                        <div class="uk-panel">
                            <img src="../assets/img/treino-hipertrofia.svg" alt="" srcset=""> 
                            <a href="">Hipertrofia</a>                       
                        </div>
                        
                    </li>
                    <li class="uk-text-center container-slide">
                        <div class="uk-panel">
                            <img src="../assets/img/treino-resistencia.svg" alt="" srcset="">
                            <a href="./workout.php">Resistência</a>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

            </div>
        </div>

    </section>
    
    <footer>
        <div class="container-footer">
            <div class="row-footer">
                <div class="footer-col">
                    <h4>MyFitJourney</h4>
                    <div class="medias-socias">
                        <a href="https://www.instagram.com/myfitjourneyreal/"> <img src="../assets/img/instagram-icon.svg"></img> </a>
                        <a href="https://twitter.com/myfitjourneyofc"> <img src="../assets/img/twitter-icon.svg"></img> </a>
                        <a href="#"> <img src="../assets/img/linkedin-icon.svg"></img> </a> 
                        <a href="https://www.instagram.com/myfitjourneyreal/"> <img src="../assets/img/facebook-icon.svg"></img> </a>                       

                    </div>
                </div>

                <div class="footer-col">
                    <h4>Informações</h4>
                    <ul>
                        <li><a href="#">Sobre</a></li>
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
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>
<script src="../assets/js/calculateTDEE.js"></script>

