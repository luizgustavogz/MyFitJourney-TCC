<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitJourney | Loja</title>
    <link rel="stylesheet" href="../assets/css/index.scss">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/store.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
</head>

<body>

    <!-- 
        <div class="sidebar">
            <menu>
                <li style="display: flex; column-gap: 10px">
                    <a href="#"></a>
                    <span>Carrinho:</span>
                    <div id="carrinho"></div>
                    <div id="trash-cart">
                        <img width="27" id="trash-cart-img" src="../assets/img/trash-cart.png" alt="">
                        <img width="20" id="decrease-product" src="../assets/img/decrease.png" alt="">
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
     
    -->

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

    <section id="hp-banner-header">
        <div class="uk-container uk-container-large">
            <div class="uk-flex-middle" uk-grid>

                <div class="uk-width-1-2@m" >
                    <h2>Aproveite as ofertas imperdíveis da MyfitJourney! Não perca tempo, compre agora e transforme seu estilo de vida!</h2>
                    <p>Na MyfitJourney, priorizamos sua tranquilidade durante toda a jornada de compra. Comprometemo-nos a oferecer uma experiência de compra segura, implementando as mais avançadas medidas de segurança online.</p>
                </div>

                <div class="uk-width-1-2@m uk-text-center">
                    <img src="../assets/img/store-banner.svg"  alt="Image">            
                </div>
        </div>
    </section>

    <section id="delyvery-contents">
        <div class="uk-container">
            <h2 class="uk-text-center">Nossos Recursos:</h2>
            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid uk-height-match="target: > div > div > .border-out">
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <div class="border-out">
                            <img src="../assets/img/supplements.svg" width="200" alt="Image">   
                            <h3 class="uk-card-title">Suplementos de Qualidade</h3>
                            <p>Descubra o poder da excelência em suplementação! Nossos produtos são cuidadosamente selecionados para garantir a mais alta qualidade, proporcionando o suporte necessário para alcançar seus objetivos de saúde e fitness.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <div class="border-out">
                            <img src="../assets/img/free-delivery.svg" width="200" alt="Image">   
                            <h3 class="uk-card-title">Entrega Grátis</h3>
                            <p>Simplificamos ainda mais sua jornada rumo à saúde e bem-estar! Agora, todos os pedidos feitos conosco têm entrega grátis diretamente para sua porta. Não importa onde você esteja, estamos comprometidos em facilitar o acesso aos melhores suplementos.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <div class="border-out">
                            <img src="../assets/img/easy-payment.svg" width="200" alt="Image">   
                            <h3 class="uk-card-title">Pagamento Fácil</h3>
                            <p>Queremos tornar sua experiência de compra tão eficiente quanto seus treinos! Com nosso sistema de pagamento fácil, você pode finalizar suas compras rapidamente, sem complicações. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <main class="product-banner">

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

                    </div>

        </main>

    

    <section class="supplements">
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
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>
 <!-- <script src="../assets/js/loja.js"></script>-->
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script src="../assets/js/accessibility.js"></script>
<script src="../assets/js/accessibilityVlibras.js"></script>
<script src="../assets/js/footerMap.js"></script>
