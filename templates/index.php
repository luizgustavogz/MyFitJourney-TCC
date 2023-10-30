<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitJourney | Evolua para a sua melhor versão</title>
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

                        <a class="uk-navbar-item uk-logo logo-header" href="index.php" aria-label="Back to Home">MyFit<strong>Journey</strong></a>
                    </div>
                    <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav">                            
                            <li>
                                <a class="link" href="shop.php">
                                    <span class="uk-icon uk-margin-small-right" ></span>
                                    Loja
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
                                    Dietas
                                </a>
                            </li>
                            <li>
                                <a class="link" href="#">
                                    <span class="uk-icon uk-margin-small-right"></span>
                                    Fale com nossos Nutricionistas
                                </a>
                            </li>
                            <li>
                                <a class="link" href="pagamento.php">
                                    <span class="uk-icon uk-margin-small-right"></span>
                                    Pagamento
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item">
                            <form action="javascript:void(0)">
                                <a href="login.php" class="uk-button uk-button-default button">Login</a>
                            </form>
                            <form action="javascript:void(0)">
                                <a href="../services/sairService.php" class="uk-button uk-button-logout">Sair</a>
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
                    <h1>Sua Jornada para <br> uma melhor versão <br>começa Aqui!</h1>
                    <p>Construa Músculos, Supere Limites e Viva de Forma Saudável com a MyFitJourney! <strong>Inscreva-se para uma avalição gratuita!</strong></p>

                    <form action="">
                        <div>
                            <div class="uk-margin box-subscription" uk-margin>
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
                <div class="uk-width-1-2@m" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
                    <img src="../assets/img/academia.svg" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <section id="hp-gym-benefits">
        <div class="uk-container uk-container-large">
            <h2 class="uk-text-center">Maiores vantagens do nosso Método</h2>

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

    <section id="hp-about-us">
        <div class="uk-container uk-container-large">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2><strong>Sobre Nós</strong>: Bem-Vindo à MyFitJourney</h2>
                    <p>Nosso site foi criado com um propósito claro: capacitar indivíduos a tomar o controle de sua saúde e bem-estar, promovendo um estilo de vida saudável e a prevenção de doenças relacionadas à obesidade e má alimentação. Acreditamos que a saúde é um ativo inestimável e que cada pessoa merece a oportunidade de viver uma vida plena, longa e cheia de vitalidade.</p>

                    <p>Nosso objetivo é fornecer recursos, informações e orientações práticas para ajudar as pessoas a fazer escolhas conscientes em relação à sua alimentação, atividade física e saúde mental. Acreditamos que a prevenção é a chave para um futuro mais saudável e estamos empenhados em capacitar nossos visitantes a trilhar esse caminho.</p> <br>
                    <a href="">Ler mais</a>
                </div>
                <div class="uk-width-1-2@m uk-text-center">
                    <img src="../assets/img/about-us-img-3.svg" alt="Image">
                </div>
            </div>            
        </div>
    </section>

    <section id="hp-services-offered">
        <div class="uk-container uk-container-large">

            <h2 class="uk-text-center">Serviços Oferecidos</h2>
            <p class="uk-text-center subtitle">For some people, putting in the hard work that it takes</p>

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-body card-services">
                        <h3 class="uk-card-title">Dieta programada</h3>
                        <p><strong>$59</strong>/ month</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> <br><br>
                        <br>
                        <a href="">Read More</a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-services">
                        <h3 class="uk-card-title">Consulta Nutricional</h3>
                        <p><strong>$59</strong>/ month</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> <br><br>
                        <br>
                        <a href="">Read More</a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-services">
                        <h3 class="uk-card-title">Treinamentos Coaching</h3>
                        <p><strong>$59</strong>/ month</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> <br><br>
                        <br>
                        <a href="">Read More</a>
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
                        <a href="https://www.linkedin.com/in/luiz-gustavo-oliveira-cunha-a9b329176/"> <img src="../assets/img/linkedin-icon.svg"></img> </a>
                        <a href="https://www.facebook.com/profile.php?id=61550970016109"> <img src="../assets/img/facebook-icon.svg"></img> </a>
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