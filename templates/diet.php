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

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3 class="uk-card-title">Default</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3 class="uk-card-title">Primary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <h3 class="uk-card-title">Secondary</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
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
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="../assets/js/calculateIMC.js"></script>
<script src="../assets/js/accessibility.js"></script>
