<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitJourney | Loja</title>
    <link rel="stylesheet" href="../assets/css/index.scss">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/store.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>
</head>

<body>

    <div class="sidebar">
        <menu>
            <li class="logo">
                <a href="#"></a>
                <span>MyFitJourney</span>
            </li>
            <li>
                <a href="#"></a>
                <span>Carrinho</span>
            </li>
            <li>
                <a href="#"></a>
                <span>Logoff</span>
            </li>
        </menu>
    </div>

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

    <main class="product-banner">
        <div class="banner-img">
            <span class="product-title">Conheça nossos Produtos</span>
        </div>

        <div class="uk-container uk-container-large">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2>Na MyFitJourney nós trazemos os produtos certos para o seu crescimento</h2>
                    <p>A MyFitJourney, comprometida com a promoção de um estilo de vida saudável, foi concebida com o objetivo claro de capacitar os indivíduos a assumirem o controle de sua saúde e bem-estar. Nossa missão é prevenir doenças relacionadas à obesidade e má alimentação, proporcionando a todos a oportunidade de viver uma vida plena, longa e cheia de vitalidade.</p>

                    <p>Acreditamos que investir na qualidade desses itens não só aprimora seu desempenho, mas também contribui significativamente para a promoção de uma vida saudável e ativa. Convidamos você a explorar nossa variedade, dando um passo firme em direção a um futuro mais saudável e capacitador.</p> <br>
                    <a href="#">Falar com especialista</a>
                </div>
                <div class="uk-width-1-2@m uk-text-center" style="margin-bottom: 80px;">
                    <img src="../assets/img/Coach-amico.svg" alt="Image">
                </div>
            </div>
        </div>


        <div class="accessories-container">
            <h2 class="uk-text-center">Os melhores Acessórios:</h2>

            <div class="uk-container uk-container-large">

                <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-body card-benefits cards-border">

                            <h2 class="uk-card-title"></h2>
                            <p class="products-price"></p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body card-benefits cards-border" style="flex-direction: row-reverse; -webkit-flex-direction: row-reverse;">
                            <h2 class="uk-card-title"></h2>
                            <p class="products-price"></p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body card-benefits cards-border">
                            <h2 class="uk-card-title"></h2>
                            <p class="products-price"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="button-grid">
                <a href="accessories.php">
                    <button class="accessories-page-button">Ver mais</button>
                </a>
            </div>

            <!-- End accessories container -->
        </div>

    </main>

    <section class="supplements">
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
                            (function() {
                                var setting = {
                                    "query": "Avenida da Liberdade, 899 - Liberdade, São Paulo - State of São Paulo, Brazil",
                                    "width": 300,
                                    "height": 200,
                                    "satellite": false,
                                    "zoom": 12,
                                    "placeId": "ChIJi9nxv6VZzpQRmTpKInfOmbo",
                                    "cid": "0xba99ce77224a3a99",
                                    "coords": [-23.5607673, -46.63771339999999],
                                    "lang": "en",
                                    "queryString": "Avenida da Liberdade, 899 - Liberdade, São Paulo - State of São Paulo, Brazil",
                                    "centerCoord": [-23.5607673, -46.63771339999999],
                                    "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                                    "embed_id": "996185"
                                };
                                var d = document;
                                var s = d.createElement('script');
                                s.src = 'https://1map.com/js/script-for-user.js?embed_id=996185';
                                s.async = true;
                                s.onload = function(e) {
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
    <script src="../assets/js/loja.js"></script>
</body>

</html>