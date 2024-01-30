    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Noticia cidade - Seu site de noticia</title>
        <link rel="stylesheet" href="assets/css/style_page.css">
    </head>

    <body  id="home"class="home">

        <div class="container">
            <div class="logo-topo1">
                <div>
                    <h1 class="logo">Noticias Cidade</h1>
                    <ul class="navegacao">
                        <li class="li"><a href="home.php" id="home">Home</a></li>
                        <li><a href="page-brasil.php" id="brasil">Brasil</a></li>
                        <li><a href="internacional.php" id="internacional">Internacional</a></li>
                        <li><a href="economia.php" id="economia" S>Economia</a></li>
                        <li><a href="saude.php" id="saude">Saúde</a></li>
                        <li><a href="ciencia.php" id="ciencia">Ciência</a></li>
                        <li><a href="page-fotos.php" id="fotos">Fotos</a></li>

                    </ul>
                </div>
            </div><!--fim do topo-->

            <!-- Inicio do conteudo-->
            <div class="conteudo" id="conteudo">
                <div id="primairo" class="conteudo-primario">
                    <!--Destaques -->
                    <div class="box titulo-destaque">
                        <h2>Destaques</h2>
                        <div class="box-conteudo ">
                            <div class="box-titulo">
                                <h3>Nova legislação</h3>
                            </div>
                            <div>
                                <img class=" img-destaque" src="assets/images/taxi.jpg" alt="taxi">
                                <p>Promoção 99, taxis's estão incluso?</p>
                                <a href="nova-legislacao.php">Veja mais</a>

                            </div>

                        </div>
                    </div> <!--FIM- Destaques -->


                    <!--1    COLUNAS SECUNDARIA-->
                    <div class="box ">
                        <h2>Mundo</h2>
                        <div class="box-conteudo">
                        
                             <ul class="lista-noticias">
                                <li>
                                    <a href="#">
                                        <img src="assets/images/tecnologia.jpg" alt="" >
                                        <h3>Crise Européia</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/doutor.jpg" alt="" >
                                        <h3>Governo</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/cidade.jpg" alt="" >
                                        <h3>Clima</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>
                                       
                                    </a>
                                </li>
                             </ul>

                            

                        </div>
                    </div><!--FIM-->
                </div>
                <!--Ultimas entrevistas-->
                <div id="secundario" class="conteudo-secundario">

                    <div class="box titulo-entrevistas">
                        <h2>Ultimas entrevistas</h2>
                        <div class="box-conteudo">
                            <div class="box-titulo">
                                <h3>Entrevista com Fabio Ginga</h3>
                            </div>

                            <div>
                                <img class=" img-destaque" src="assets/images/doutor.jpg" alt="taxi">
                                <p>Dr. Ginga - Neurocirurgião</p>
                                <a href="#">Veja mais</a>

                            </div>

                        </div>
                    </div>


                    <!--2 COLUNAS SECUNDARIA-->
                    <div class="box ">
                        <h2>Noticias recentes</h2>
                        <div class="box-conteudo">    
                    
                             <ul class="lista-noticias">
                                <li>
                                    <a href="#">
                                        <img src="assets/images/cidade.jpg" alt="" >
                                        <h3>Novas tecnologias</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/taxi.jpg" alt="" >
                                        <h3>Novas tecnologias</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/images/tecnologia.jpg" alt="" >
                                        <h3>Novas tecnologias</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>
                                       
                                    </a>
                                </li>
                             </ul>

                            

                        </div>
                    </div><!--FIM-->


                </div>
                <!-- Fim - Ultimas entrevistas-->

                <!--inicio nav lateral-->
                <div id="lateral" class="lateral">
                    <div class="box">
                        <h2>Entrevistas</h2>
                        <div class="box-conteudo">
                            <ul>
                                <li><a href="">José Almeida</a></li>
                                <li><a href="">Felipe Silva</a></li>
                                <li><a href="">Renato Rodrigues</a></li>
                                <li><a href="">Abelardo Silveira</a></li>
                                <li><a href="">André Carlos</a></li>
                                <li><a href="">Márcio Mello</a></li>
                                <li><a href="">João Pedro</a></li>
                                <li><a href="">Fernando Weiss</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box">
                        <h2>News</h2>
                        <div class="box-conteudo">
                            <form action="" method="">
                                <label for="email">E-mail: </label>
                                <div class="formulario">
                                    <input type="email" id="email" placeholder="Cadastre  seu e-mail">
                                    <button type="submit" class="btn">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--Fim nav lateral-->


            </div>
            <!--Fim-conteudo-->
            <footer>
                <div class="footer-2">
                    Direitos reservados
                </div>
            </footer>
        </div><!--Fim container-->


    </body>

    </html>