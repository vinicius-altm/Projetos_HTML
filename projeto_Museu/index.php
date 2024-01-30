    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Museu Nacional</title>
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <!--html shiv cdn-->
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container"><!-- Inicio Container-->
            <header><!--Inicio Header-->
                <div class="logo"> <!--Logo-->
                    <h1><a href="">Museu Nacional</a></h1>
                </div><!--Fim logo-->

                <nav> <!--inicio nav-->
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Exposições</a></li>
                        <li><a href="">Pesquisa</a></li>
                        <li><a href="">Acervo</a></li>
                        <li><a href="">Videos</a></li>
                        <li><a href="">Fotos</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </nav><!--Fim nav-->

            </header><!--Fim Header-->

            <div class="principal"><!-- PRINCIPAL-->
                <div class="conteudo">
                    <section class="section-capa"><!-- CAPA-->
                        <img src="assets/images/museu.png" alt="MUSEU">
                    </section>
                    <section class="postagens"><!-- POSTAGENS-->
                        <article class="article-video"><!-- ARTICLE - VIDEO-->
                            <h3>Video: Conheça o museu</h3>
                            <iframe width="310" height="170" 
                            src="https://www.youtube.com/embed/K9qhvouwgiU" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; 
                            clipboard-write; encrypted-media; 
                            gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                        </article>
                        <article class="article-mapa"><!-- ARTICLE - MAPA-->
                            <h3>Mapa: Encontre o Museu Nacional</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58503.84215929638!2d-46.67767174179687!3d-23.586748699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5be650476023%3A0x2c33390e6e3805b1!2sMuseu%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1677723771373!5m2!1spt-BR!2sbr" 
                                width="310" 
                                height="170" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </article>
                        <article class="article-exposicao"> <!-- ARTICLE EXPOSICAO-->
                            <h3>Exposições</h3>
                                <ul>
                                    <li><a href="#">Os assustadores insetos</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">O crânio de Luiza, a mais antiga do Brasil</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Preguiça gigante e tigre-dentes-de-sabre</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Plantas do Brasil Central</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#"><strong>Veja todos (65)</strong></a></li>
                                </ul>
                        </article>
                        <article class="article-historia"><!-- ARTICLE HISTORIA-->
                            <h3>200 anos de história</h3>
                             <p>
                             Trata-se de um tipo de exposição de arte que “conta a história” do artista por meio de suas obras mais marcantes, expressivas e polêmicas. 
                             Também pode ser uma reunião de obras mais representativas de um período.
                             </p>
                        </article>


                    </section> <!-- FIM POSTAGEM-->
                </div><!-- FIM CONTEUDO-->
                <aside> <!--ASIDE-->
                    <section class="section-depoimento"> <!--Section-Depoimento-->
                        <img src="assets/images/depoimento.png" alt="">
                    </section> <!--FIM Section-Depoimento-->
                    <section class="section-visita"> <!--Section-Visita-->
                        <h4>Faça uma visita</h4>
                        <form action="">
                            <fieldset>
                                <legend>Selecione uma data</legend>
                                <label for="data">Data</label>
                                <input class="input-text" type="date" name="data" id="data" value="dd/mm/aaa">
                                <label for="qtd">Qtd pessoas</label>
                                <input class="input-text" type="text" name="qtd" id="qtd" value="1">
                            </fieldset>
                            <input type="submit" value="Verificar diponibilidade">
                        </form>
                    </section> <!--FIM Section-Visita-->
                    <section class="section-galeria">
                        <h4>Galeria de fotos</h4>
                        <a href="">
                            <img src="assets/images/imagem1.jpg" alt="imagem1">
                        </a>
                        <a href="">
                            <img src="assets/images/imagem2.jpg" alt="imagem2">
                        </a>
                        <a href="">
                            <img src="assets/images/imagem3.jpg" alt="imagem3">
                        </a>
                        <a href="">
                            <img src="assets/images/imagem4.jpg" alt="imagem4">
                        </a>
                    </section>
                </aside> <!--FIM ASIDE-->
                <footer>
                <p><a href="">Home</a>
                <a href="">Exposições</a>
                <a href="">Pesquisa</a>
                <a href="">Acervo</a>
                <a href="">Vídeos</a>
                <a href="">Fotos</a>
                <a href="">Contato</a>
            </p>
            <p>
                &copy;2023 - <a href="">Museu Nacional</a> - Todos os direitos reservados
            </p>
            </footer>
            </div> <!--FIM PRINCIPAL-->
            
        </div><!-- Fim Container-->

    </body>

    </html>