<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyFitJourney | Evolua para a sua melhor versão</title>
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/map.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/css/uikit.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="./assets/js/map.js" defer></script>
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
                                <a class="link" href="#">
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
                                <a class="uk-button uk-button-default button">Area do cliente</a>
                            </form>
                        </div>    
                    </div>

                </div>
            </div>
        </nav>
    </section>

    <section id="hp-banner-header">
        <div class="uk-container ">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h1>Sua Jornada para <br> uma melhor versão <br>começa Aqui!</h1>
                    <p>Construa Músculos, Supere Limites e Viva de Forma Saudável com a MyFit Journey! <strong>Inscreva-se para uma avalição gratuita!</strong></p>

                    <form action="">
                        <div>
                            <div class="uk-margin box-subscription" uk-margin>
                                
                                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Digite seu email" aria-label="Custom controls" >
                                
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
                <div class="uk-width-1-2@m">
                    <img src="./assets/img/runner.png" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <section id="hp-gym-benefits">
        <div class="uk-container">
            <h1>Maiores vantagens do nosso metodo</h1>

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                <div>
                    <div class="uk-card uk-card-body card-benefits">
                        <img src="" alt="" srcset="">
                        <h3 class="uk-card-title">Desenvolva sua Força e Músculos</h3>
                        <p>Os benefícios da musculação incluem a construção de músculos magros, a melhoria da postura e a prevenção de lesões.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits-secondary">
                        <img src="" alt="" srcset="">
                        <h3 class="uk-card-title">  Perda de Gordura Ruim</h3>
                        <p>Com dedicação e um plano bem equilibrado, você alcançará seus objetivos de desempenho e superará seus limites.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits">
                        <img src="" alt="" srcset="">
                        <h3 class="uk-card-title">Secondary</h3>
                        <p> Para queimar gordura ruim e alcançar um corpo mais saudável, concentre-se em uma combinação de exercícios cardiovasculares e treinamento de força. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div id="map"></div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJTurt8jzCmO6z7VjAMG7DGpSy5UIOkHA&callback=initMap&v=weekly"
      defer
    ></script>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.16.26/dist/js/uikit-icons.min.js"></script>