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
                    <h1>Seu guia de treinos para uma vida mais saudável e ativa!</h1>
                    <p>Planeje suas atividades de acordo com os objetivos que deseja atingir! 
                        <br> Lembre-se ter um bom cuidado com a saúde é fundamental, não só <br> para fins estéticos, mas para bem-estar e uma vida mais saudável</p>

                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
                        <div>
                            <div class="uk-card uk-card-body cards-item">
                                <h3 class="uk-card-title">6</h3>
                                <p>Tipos de <br> treinos</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body cards-item">
                                <h3 class="uk-card-title">+8mil</h3>
                                <p>Clientes <br> Satisfeitos</p>
                            </div>
                        </div>
                        <div>
                            <div class="uk-card uk-card-body cards-item">
                                <h3 class="uk-card-title">+50</h3>
                                <p>Instrutores <br> qualificados</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="wk-trainners">
        <div class="uk-container uk-container-large">
            <h2 class="uk-text-center">Escolha seu <strong>Treino agora!</strong></h2>            

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

    <section id="wk-training-plans">
        <div class="uk-container uk-container-large">
            <h2 class="uk-text-center">Planos de Treino Personalizados</h2>            

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border-black">
                        <h3 class="uk-card-title">
                            <img src="../assets/img/img-wk-card-cardio.png" alt="" width="55" height="55">
                            Cardiovascular
                        </h3>
                        <p>Os treinos cardiovasculares são essenciais para a saúde, proporcionando melhorias no sistema cardiovascular, 
                            resistência física e controle de peso. Ao escolher atividades como corrida, ciclismo ou dança, você fortalece 
                            não apenas o corpo, mas também a mente. Além disso, eles melhoram a função respiratória e do coração e relaxam 
                            os vasos sanguíneos, melhorando a circulação (elasticidade arterial) e, assim, a distribuição de oxigênio por todo 
                            organismo, além de controlar o peso e a glicose no sangue.Comece devagar, aumentando gradualmente a intensidade para colher os 
                            benefícios a longo prazo. Explore a variedade de opções e inicie sua jornada para uma vida mais ativa e saudável. 
                            Exemplos de treinos cardiovasculares:
                        </p>                        
                        <img src="../assets/img/list-icon-blue.svg" alt="" width="15" height="15">
                        <span>Corrida</span> <br><br>                        
                        <img src="../assets/img/list-icon-black.svg" alt="" width="15" height="15">
                        <span>Polichinelo</span> <br><br>
                        <img src="../assets/img/list-icon-blue.svg" alt="" width="15" height="15">
                        <span>Pular corda</span> <br><br>
                        <img src="../assets/img/list-icon-black.svg" alt="" width="15" height="15">
                        <span>Spinning</span> <br><br>
                        <img src="../assets/img/list-icon-blue.svg" alt="" width="15" height="15">
                        <span>Corrida parada</span> <br><br>
                        <img src="../assets/img/list-icon-black.svg" alt="" width="15" height="15">
                        <span>Ciclismo</span> <br><br>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits-secondary cards-border-white">
                        <h3 class="uk-card-title">
                            <div class="invert-img">
                                <canvas id="canvas-resistencia" width="55" height="55"></canvas>
                            </div>
                            Resistência
                        </h3>
                        <p>Os treinos de resistência são essenciais para construir músculos, melhorar a força e transformar seu corpo. 
                            Seja através da musculação clássica ou de exercícios sem equipamento, como flexões e agachamentos, esses 
                            treinos não apenas aprimoram a estética, mas fortalecem ossos, articulações e ligamentos. Além dos benefícios 
                            visíveis, como a tonificação muscular, os treinos de resistência promovem saúde cardiovascular, estabilidade e 
                            equilíbrio. Comece com cargas adequadas, progrida consistentemente e descubra como esses treinos podem não só 
                            transformar seu corpo, mas também cultivar uma mentalidade resiliente em todas as áreas da vida.
                            Exemplos de treinos de resistência: <br>
                        </p>
                        <img src="../assets/img/list-icon-orange.svg" alt="" width="15" height="15">
                        <span>Treino HIIT (High-Intensity Interval Training)</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Pull-ups</span> <br><br>
                        <img src="../assets/img/list-icon-orange.svg" alt="" width="15" height="15">
                        <span>Pulos em caixas</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Abdominal</span> <br><br>
                        <img src="../assets/img/list-icon-orange.svg" alt="" width="15" height="15">
                        <span>Prancha</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Agachamento</span> <br><br>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border-black">
                        <h3 class="uk-card-title">
                            <img src="../assets/img/img-wk-card-definicao.png" alt="" width="55" height="55">
                            Definição
                        </h3>
                        <p>Treinos de definição muscular focam em tonificar os músculos, queimando gordura para realçar as formas do corpo. 
                            Normalmente são realizados em circuitos intensos para trabalhar várias áreas musculares. Alternar a intensidade 
                            dos treinos é essencial para evitar lesões e favorecer a recuperação muscular. Nutrição equilibrada, rica em proteínas 
                            e nutrientes essenciais, é crucial para apoiar a energia e a recuperação muscular. Mantenha a consistência, integre variedade 
                            e intensidade aos treinos, e experimente não apenas a transformação física, mas também um estilo de vida ativo e saudável. 
                            Em resumo, treinos de definição muscular tonificam o corpo, exigindo atenção à dieta e à intensidade dos exercícios.
                            Exemplos de treinos de definição:
                        </p>
                        <img src="../assets/img/list-icon-blue.svg" alt="" width="15" height="15">
                        <span>Musculação</span> <br><br>                        
                        <img src="../assets/img/list-icon-black.svg" alt="" width="15" height="15">
                        <span>Afundo</span> <br><br>
                        <img src="../assets/img/list-icon-blue.svg" alt="" width="15" height="15">
                        <span>Agachamento</span> <br><br>
                        <img src="../assets/img/list-icon-black.svg" alt="" width="15" height="15">
                        <span>Abdominal</span> <br><br>
                        <img src="../assets/img/list-icon-blue.svg" alt="" width="15" height="15">
                        <span>Prancha</span> <br><br>
                        <img src="../assets/img/list-icon-black.svg" alt="" width="15" height="15">
                        <span>Burpee</span> <br><br>
                    </div>
                </div>
            </div>

            <br><br><br>

            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">
                <div>
                    <div class="uk-card uk-card-body card-benefits-secondary cards-border-white">
                        <h3 class="uk-card-title">
                            <div class="invert-img">
                                <canvas id="canvas-forca" width="55" height="55"></canvas>
                            </div>
                            Força
                        </h3>
                        <p>O treino de força é o queridinho de quem deseja músculos grandes, definidos e torneados, já que trabalha com cargas pesadas e poucas
                            repetições. Como diz o nome, a modalidade desenvolve a força e torna o corpo mais resistente, com ajuda do aumento progressivo dos pesos.
                            Apesar de ser mais conhecido pela musculação em academia, esse tipo de treino pode ser feito em diferentes atividades físicas, como pilates
                            e crossfit, e até sequências em casa. As vantagens, aliás, são muitas, tanto para atletas profissionais como amadores. Além de melhorar a 
                            postura e a qualidade do sono, esse exercício contribui para maior agilidade, equilíbrio e coordenação motora.
                            Exemplos de treinos de força: <br><br>
                        </p>
                        <img src="../assets/img/list-icon-orange.svg" alt="" width="15" height="15">
                        <span>Levantamento Terra</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Supino</span> <br><br>
                        <img src="../assets/img/list-icon-orange.svg" alt="" width="15" height="15">
                        <span>Remada Curva</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Agachamento Livre</span> <br><br>
                        <img src="../assets/img/list-icon-orange.svg" alt="" width="15" height="15">
                        <span>Elevações com barra fixa</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Dips nas paralelas</span> <br><br>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body card-benefits cards-border-black">
                        <h3 class="uk-card-title">
                            <img src="../assets/img/img-wk-card-funcional.png" alt="" width="55" height="55">
                            Funcional
                        </h3>
                        <p>O treinamento funcional se baseia nos movimentos naturais do ser humano, como pular, correr, puxar, agachar, girar e empurrar. O praticante ganha 
                            força, equilíbrio, flexibilidade, condicionamento, resistência e agilidade. Ele tira a pessoa dos movimentos mecânicos e eixos definidos ou isolados, 
                            como acontece na musculação. Por isso, virou uma alternativa para quem estava cansado dos exercícios mais tradicionais na academia. 
                            Para trabalhar a musculatura profunda, são utilizados acessórios como elásticos, cordas, bolas, cones, discos e hastes. É um método que ajuda a prevenir
                            lesões, gera melhorias cardiovasculares, a redução do percentual de gordura, emagrecimento e definição muscular.
                            Exemplos de treinos funcionais:
                        </p>                        
                        <img src="../assets/img/list-icon-blue.svg" alt="" width="15" height="15">
                        <span>Flexão com Rotação</span> <br><br>                        
                        <img src="../assets/img/list-icon-black.svg" alt="" width="15" height="15">
                        <span>Prancha</span> <br><br>
                        <img src="../assets/img/list-icon-blue.svg" alt="" width="15" height="15">
                        <span>Lunges (Avanço)</span> <br><br>
                        <img src="../assets/img/list-icon-black.svg" alt="" width="15" height="15">
                        <span>Agachamento Funcional</span> <br><br>
                        <img src="../assets/img/list-icon-blue.svg" alt="" width="15" height="15">
                        <span>Pular Corda</span> <br><br>
                        <img src="../assets/img/list-icon-black.svg" alt="" width="15" height="15">
                        <span>Levantamento Terra</span> <br><br>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-body card-benefits-secondary cards-border-white">                        
                        <h3 class="uk-card-title">
                            <div class="invert-img">
                                <canvas id="canvas-hipertrofia" width="55" height="55"></canvas>
                            </div>
                            Hipertrofia
                        </h3>
                        <p>O treino de hipertrofia é focado no aumento da massa muscular e, exatamente por isso, precisa ser elaborado levando em conta uma alimentação adequada: 
                            não basta se entupir de proteínas e malhar sem parar, pensando em virar monstrão (ou monstrona)!
                            Além de exercícios focados em ganho de massa, a dieta precisa prever não só um consumo de calorias que ofereça energia para realizar os exercícios, 
                            mas também um excedente para sustentar o crescimento muscular. O que explica, inclusive, por que muita gente faz dieta para ganhar massa muscular em 
                            vez de para emagrecer. Descubra o poder transformador desses treinos e alcance seus objetivos de construção muscular de forma eficaz.
                            Exemplos de treinos de hipertrofia:
                        </p><br>
                        <img src="../assets/img/list-icon-orange.svg" alt="" width="15" height="15">
                        <span>Supino Barra</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Desenvolvimento com Halteres</span> <br><br>
                        <img src="../assets/img/list-icon-orange.svg" alt="" width="15" height="15">
                        <span>Rosca Direta (Bíceps)</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Leg Press</span> <br><br>
                        <img src="../assets/img/list-icon-orange.svg" alt="" width="15" height="15">
                        <span>Corda na Polia Alta (Tríceps)</span> <br><br>
                        <img src="../assets/img/list-icon.svg" alt="" width="15" height="15">
                        <span>Remada Curva</span> <br><br>
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

<script src="../assets/js/invertColors.js"></script>
</body>

</html>