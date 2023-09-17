<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitJourney | Store</title>
    <link rel="stylesheet" href="./assets/css/index.scss">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
</head>
<body>
    <section id="menu-nav-home-banner">
        <nav class="uk-navbar-container">
            <div class="uk-container ">
                <div uk-navbar>

                    <div class="uk-navbar-left">

                        <a class="uk-navbar-item uk-logo logo-header" href="#" aria-label="Back to Home">MyFit<strong>Journey</strong></a>
                    </div>
                    <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav">
                            <li>
                                <a class="link" href="#">
                                    <span class="uk-icon uk-margin-small-right" ></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a class="link" href="shop.php">
                                    <span class="uk-icon uk-margin-small-right" ></span>
                                    Store
                                </a>
                            </li>
                            <li>
                                <a class="link" href="#">
                                    <span class="uk-icon uk-margin-small-right"></span>
                                    Treinos
                                </a>
                            </li>
                            <li>
                                <a class="link" href="#">
                                    <span class="uk-icon uk-margin-small-right"></span>
                                    Cardapio
                                </a>
                            </li>
                            <li>
                                <a class="link" href="#">
                                    <span class="uk-icon uk-margin-small-right"></span>
                                    Fale com nossos Nutricionistas
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item">
                            <form action="javascript:void(0)">
                                <a href="login.php" class="uk-button uk-button-default button">Area do cliente</a>
                            </form>
                        </div>    
                    </div>

                </div>
            </div>
        </nav>
    </section>

    <footer>
        <div class="container-footer">
            <div class="row-footer">
                <div class="footer-col">
                    <h4>MyFitJourney</h4>
                    <div class="medias-socias">
                        <a href="https://www.instagram.com/myfitjourneyreal/"> <img src="./assets/img/instagram-icon.svg"></img> </a>
                        <a href="https://twitter.com/myfitjourneyofc"> <img src="./assets/img/twitter-icon.svg"></img> </a>
                        <a href="#"> <img src="./assets/img/linkedin-icon.svg"></img> </a>                        
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Obter ajuda</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Transporte</a></li>
                        <li><a href="#">devoluções</a></li>
                        <li><a href="#">Status De Pedido</a></li>
                        <li><a href="#">Opções De Pagamento</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Loja online</h4>
                    <ul>
                        <li><a href="#">Relógio</a></li>
                        <li><a href="#">Saco</a></li>
                        <li><a href="#">Calçado</a></li>
                        <li><a href="#">Endereço</a></li>
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