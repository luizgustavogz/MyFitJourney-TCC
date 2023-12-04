<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitJourney | Acessórios</title>
    <link rel="stylesheet" href="../assets/css/index.scss">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/accessories.css">
    <link rel="stylesheet" href="../assets/css/toast.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="sidebar">
        <menu>
            <li style="display: flex; column-gap: 10px">
                <a href="#"></a>
                <span>Carrinho:</span>
                <div id="carrinho"></div>
                <div id="trash-cart">
                    <img width="27" id="trash-cart-img" src="../assets/img/trash-cart.png" alt="">
                </div>
            </li>
            <li>
                <a href="#"></a>
                <span>Total: </span>
                <span id="total_amount"></span>
            </li>
            <li>
                <div class="uk-margin box-subscription" uk-margin>
                    <a href="address.php"><button class="uk-button uk-button-default button-2">Comprar</button></a>
                </div>
            </li>
        </menu>
    </div>

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
                            <form action="javascript:void(0)">
                                <a href="../services/logoutService.php" class="uk-button uk-button-logout">Sair</a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </section>

    <section id="products-content">
        <h2 style="font-weight: 700;font-size: 40px;color: #fff; margin-bottom: 20px;" class="uk-text-center">Acessórios</h2>
        <div class="uk-container uk-container-large">

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border">

                        <h2 class="uk-card-title"></h2>
                        <p class="products-description"></p>
                        <p class="products-price"></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border" style="flex-direction: row-reverse; -webkit-flex-direction: row-reverse;">
                        <h2 class="uk-card-title"></h2>
                        <p class="products-description"></p>
                        <p class="products-price"></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border">
                        <h2 class="uk-card-title"></h2>
                        <p class="products-description"></p>
                        <p class="products-price"></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border">

                        <h2 class="uk-card-title"></h2>
                        <p class="products-description"></p>
                        <p class="products-price"></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border" style="flex-direction: row-reverse; -webkit-flex-direction: row-reverse;">
                        <h2 class="uk-card-title"></h2>
                        <p class="products-description"></p>
                        <p class="products-price"></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border">
                        <h2 class="uk-card-title"></h2>
                        <p class="products-description"></p>
                        <p class="products-price"></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border">

                        <h2 class="uk-card-title"></h2>
                        <p class="products-description"></p>
                        <p class="products-price"></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border" style="flex-direction: row-reverse; -webkit-flex-direction: row-reverse;">
                        <h2 class="uk-card-title"></h2>
                        <p class="products-description"></p>
                        <p class="products-price"></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border">
                        <h2 class="uk-card-title"></h2>
                        <p class="products-description"></p>
                        <p class="products-price"></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="main-content">
        <h2 class="uk-text-center" style="font-weight: 700;color: #fff; margin-bottom: 80px;">Os melhores Acessórios:</h2>
        <div class="uk-container uk-container-large">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <div>
                        <h2 style="color: #fff;">Cuide da sua saúde com treinos personalizados!</h2>
                        <p style="color: #fff;">A MyFitJourney, A MyFitJourney, comprometida com o seu bem-estar, oferece programas de exercícios exclusivos para capacitar você a alcançar uma vida plena e saudável. Nossa abordagem personalizada visa não apenas a melhoria física, mas também o equilíbrio mental, promovendo um estilo de vida ativo e sustentável. Invista em seu corpo, invista em você. Viva com vitalidade, cuide da sua saúde conosco!</p>

                        <p style="color: #fff;">Na MyFitJourney, entendemos que cada jornada é única, e é por isso que oferecemos programas de exercícios sob medida para atender às suas necessidades específicas. Nossos treinos são projetados para não apenas aprimorar a sua forma física, mas também para promover o equilíbrio mental e o bem-estar geral.</p> <br>
                        <u style="color: #fff;"><a id="workout-link" href="workout.php">Ir para Treinos</a></u>
                    </div>
                </div>
                <div class="uk-width-1-2@m uk-text-center" style="margin-bottom: 80px;">
                    <img style="width: 400px;" src="../assets/img/Coach-amico.svg" alt="Image">
                </div>
            </div>
        </div>
        <div id="toast"></div>
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
</body>
</html>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script src="../assets/js/accessories.js"></script>
<script src="../assets/js/accessibility.js"></script>
<script src="../assets/js/accessibilityVlibras.js"></script>
<script src="../assets/js/footerMap.js"></script>
<script src="../assets/js/toast.js"></script>
