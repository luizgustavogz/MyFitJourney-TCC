<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitJourney | Treinos</title>
    <link rel="stylesheet" href="../assets/css/index.scss">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/workout.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>
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

                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <img src="../assets/img/treinos.svg" alt="Image">
                </div>

                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                    <h1>Bem vindo a sua jornada fit!<br>Seu guia de treinos para uma vida saudável e ativa!</h1>
                    <p>Construa Músculos, Supere Limites e Viva de Forma Saudável com a MyFitJourney! <strong>Inscreva-se para uma avalição gratuita!</strong></p>

                    <form action="">
                        <div>
                            <div class="uk-margin box-subscription" uk-margin>

                                <input class="uk-input uk-form-width-medium" type="text" placeholder="Digite seu email" aria-label="Custom controls">

                                <button class="uk-button uk-button-default">Iniciar Consultoria</button>
                            </div>
                        </div>
                    </form>

                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-body cards-item">
                                <h3 class="uk-card-title">20</h3>
                                <p>Anos de <br> Experiência</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body cards-item">
                                <h3 class="uk-card-title">+8k</h3>
                                <p>Clientes <br> Satisfeitos</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body cards-item">
                                <h3 class="uk-card-title">+50</h3>
                                <p>Profissionais <br> qualificados</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="hp-gym-benefits">
        <div class="uk-container uk-container-large">
            <h2 class="uk-text-center">Planos de Treino Personalizados</h2>
            <p class="uk-text-center subtitle">Encontre o plano de treino perfeito pra você.</p>

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border">
                        <img src="../assets/img/img-card-1.png" alt="" srcset="">
                        <h3 class="uk-card-title">Desenvolva Músculos</h3>
                        <p>Os benefícios da musculação incluem a construção de músculos magros, a melhoria da postura e a prevenção de lesões.</p>
                        <a href="">learn more</a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits-secondary cards-border">
                        <img src="../assets/img/img-card-2.png" alt="" srcset="">
                        <h3 class="uk-card-title"> Perda de Gordura Ruim</h3>
                        <p>Com dedicação e um plano bem equilibrado, você alcançará seus objetivos de desempenho e superará seus limites.</p>
                        <a href="">learn more</a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border">
                        <img src="../assets/img/img-card-3.png" alt="" srcset="">
                        <h3 class="uk-card-title">Corpo saudável</h3>
                        <p> queime gordura ruim e alcance um corpo mais saudável, foco em exercícios cardiovasculares e treinamento de força. </p>
                        <a href="">learn more</a>
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