<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitJourney | Pagamento</title>
    <link rel="stylesheet" href="../assets/css/index.scss">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/newPayments.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    
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

    <section id="payment-section">
        <div class="container">

            <div class="card-container">
                <div class="card">
                    <div class="image">
                        <img src="../assets/img/chip.png" alt="">
                        <img src="../assets/img/visa.png" alt="">
                    </div>
                    <div class="card-number-box">################</div>
                    <div class="flexbox">
                        <div class="box">
                            <span>proprietário</span>
                            <div class="card-holder-name">nome completo</div>
                        </div>
                        <div class="box">
                            <span>validade</span>
                            <div class="expiration">
                                <span class="exp-month">mm</span>
                                <span class="exp-year">yy</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="back">
                    <div class="stripe"></div>
                    <div class="box">
                        <span>cvv</span>
                        <div class="cvv-box"></div>
                        <img src="../assets/img/visa.png" alt="">
                    </div>

                </div>
            </div>

            <form action="">
                <div class="inputBox">
                    <span>Número no Cartão</span>
                    <input type="text" maxlength="16" class="card-number-input">
                </div>
                <div class="inputBox">
                    <span>Nome no cartão</span>
                    <input type="text" maxlength="20" class="card-holder-input">
                </div>
                <div class="flexbox">
                    <div class="inputBox">
                        <span>mês de validade</span>
                        <select name="" class="month-input" id="">
                            <option value="month" selected disabled>Mês</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="inputBox">
                        <span>ano de validade</span>
                        <select name="" class="year-input" id="">
                            <option value="year" selected disabled>Ano</option>
                            <option value="24">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                        </select>
                    </div>
                    <div class="inputBox">
                        <span>cvv</span>
                        <input type="text" maxlength="3" class="cvv-input">
                    </div>
                </div>
                <input type="submit" value="Finalizar compra" class="submit-btn">
            </form>
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
<script src="../assets/js/payment.js"></script>
<script src="../assets/js/acessibility.js"></script>
