<?php //http://localhost:81/Conferencia_PHP/index.php ?>

<?php include_once('includes/templates/header.php') ?>
    
    <section class="seccion contenedor">
        <h2>La mejor conferencia  de diseño web en español</h2>
        <p>
            Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex blandit vehicula.
            Morbi porttitor tempus euismod.
        </p>
    </section>
    <!--seccion-->

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="bg-talleres.jpg">
                    <source src="video/video.mp4" type="video/mp4">
                    <source src="video/video.webm" type="video/webm">
                    <source src="video/video.ogv" type="video/ogg">
                </video>
        </div>
        <!--.contenedor-video-->
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del Evento</h2>

                    <nav class="menu-programa">
                        <a href="#seminario">
                                      <i class="fa fa-university" aria-hidden="true"></i> Seminario                                </a>
                        <a href="#conferencias">
                                      <i class="fa fa-comment" aria-hidden="true"></i> Conferencias                                </a>
                        <a href="#talleres">
                                      <i class="fa fa-code" aria-hidden="true"></i> Talleres                                </a>
                        <a href="#workshop">
                                      <i class="fa fa-comments" aria-hidden="true"></i> Workshop                                </a>
                    </nav>




                    <div id="seminario" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI y UX para móviles</h3>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00:00</p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 2016-12-09</p>
                            <p><i class="fa fa-user" aria-hidden="true"></i> Susan Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Angular 5</h3>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 19:00:00</p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 2016-12-10</p>
                            <p><i class="fa fa-user" aria-hidden="true"></i> Juan Sanchez</p>
                        </div>
                        <a href="calendario.php" class="button float-right">Ver todos</a>
                    </div>
                    <!--#talleres-->

                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser freelancer</h3>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 10:00:00</p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 2016-12-09</p>
                            <p><i class="fa fa-user" aria-hidden="true"></i> Susan Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnologías del Futuro PHP</h3>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 05:00:00</p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 2016-12-09</p>
                            <p><i class="fa fa-user" aria-hidden="true"></i> Juan Sanchez</p>
                        </div>
                        <a href="calendario.php" class="button float-right">Ver todos</a>
                    </div>
                    <!--#talleres-->

                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5 y CSS3</h3>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 02:00:00</p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 2016-12-09</p>
                            <p><i class="fa fa-user" aria-hidden="true"></i> Juan Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>WordPress</h3>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 19:00:00</p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 2016-12-09</p>
                            <p><i class="fa fa-user" aria-hidden="true"></i> Harold Garcia</p>
                        </div>
                        <a href="calendario.php" class="button float-right">Ver todos</a>
                    </div>
                    <!--#talleres-->



                </div>
                <!--.programa-evento-->
            </div>
            <!--.contenedor-->
        </div>
        <!--.contenido-programa-->
    </section>
    <!--.programa-->



    <section class="invitados contenedor seccion">
        <h2>Nuestros jugadores</h2>
        <ul class="lista-invitados clearfix">


            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado1">
                                         <img src="img/invitados/invitado1.jpg" alt="Imagen invitado">
                                         <p>Rafael  Bautista</p>
                                     </a>
                </div>
                <!-- END .invitado -->
            </li>

            <div style="display:none;">

                <div class="invitado-info" id="invitado1">
                    <h2>Rafael </h2>
                    <img src="img/invitado1.jpg" alt="">
                    <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus massa non molestie.</p>
                </div>

            </div>


            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado2">
                                         <img src="img/invitados/invitado2.jpg" alt="Imagen invitado">
                                         <p>Shari Herrera</p>
                                     </a>
                </div>
                <!-- END .invitado -->
            </li>

            <div style="display:none;">

                <div class="invitado-info" id="invitado2">
                    <h2>Shari</h2>
                    <img src="img/invitado2.jpg" alt="">
                    <p>Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex blandit vehicula. Morbi porttitor tempus euismod.</p>
                </div>

            </div>


            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado3">
                                         <img src="img/invitados/invitado3.jpg" alt="Imagen invitado">
                                         <p>Juan Sanchez</p>
                                     </a>
                </div>
                <!-- END .invitado -->
            </li>

            <div style="display:none;">

                <div class="invitado-info" id="invitado3">
                    <h2>Juan</h2>
                    <img src="img/invitado3.jpg" alt="">
                    <p>placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex blandit vehicula. Morbi porttitor tempus euismod.</p>
                </div>

            </div>


            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado4">
                                         <img src="img/invitados/invitado4.jpg" alt="Imagen invitado">
                                         <p>Susana Rivera</p>
                                     </a>
                </div>
                <!-- END .invitado -->
            </li>

            <div style="display:none;">

                <div class="invitado-info" id="invitado4">
                    <h2>Susana</h2>
                    <img src="img/invitado4.jpg" alt="">
                    <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus</p>
                </div>

            </div>


            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado5">
                                         <img src="img/invitados/invitado5.jpg" alt="Imagen invitado">
                                         <p>Harold Garcia</p>
                                     </a>
                </div>
                <!-- END .invitado -->
            </li>

            <div style="display:none;">

                <div class="invitado-info" id="invitado5">
                    <h2>Harold</h2>
                    <img src="img/invitado5.jpg" alt="">
                    <p>placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex blandit vehicula. Morbi porttitor tempus euismod.</p>
                </div>

            </div>


            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado6">
                                         <img src="img/invitados/invitado6.jpg" alt="Imagen invitado">
                                         <p>Susan Sanchez</p>
                                     </a>
                </div>
                <!-- END .invitado -->
            </li>

            <div style="display:none;">

                <div class="invitado-info" id="invitado6">
                    <h2>Susan</h2>
                    <img src="img/invitado6.jpg" alt="">
                    <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at
                        ex blandit vehicula. Morbi porttitor tempus euismod.</p>
                </div>

            </div>


        </ul>
        <!-- END lista-invitados -->
    </section>
    <!-- END .invitados -->




    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero">0</p> Invitados</li>
                <li>
                    <p class="numero">0</p> Talleres</li>
                <li>
                    <p class="numero">0</p> Días</li>
                <li>
                    <p class="numero">0</p> Conferencias</li>

            </ul>
        </div>
    </div>

    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por día</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Todos los días</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 días</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!--<div id="mapa" class="mapa"></div>-->

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.
                        <p>
                            <footer class="info-testimonial clearfix">
                                <img src="img/testimonial.jpg" alt="imagen testimonial">
                                <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                            </footer>
                </blockquote>
            </div>
            <!--.testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.
                        <p>
                            <footer class="info-testimonial clearfix">
                                <img src="img/testimonial.jpg" alt="imagen testimonial">
                                <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                            </footer>
                </blockquote>
            </div>
            <!--.testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.
                        <p>
                            <footer class="info-testimonial clearfix">
                                <img src="img/testimonial.jpg" alt="imagen testimonial">
                                <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                            </footer>
                </blockquote>
            </div>
            <!--.testimonial-->
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p> regístrate al newsletter:</p>
            <h3>gdlwebcamp</h3>
            <a href="#mc_embed_signup" class="boton_newsletter button transparente">Registro</a>
        </div>
        <!--.contenido-->
    </div>
    <!--.newsletter-->

    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p> días</li>
                <li>
                    <p id="horas" class="numero"></p> horas</li>
                <li>
                    <p id="minutos" class="numero"></p> minutos</li>
                <li>
                    <p id="segundos" class="numero"></p> segundos</li>
            </ul>
        </div>
    </section>
  
<?php include_once('includes/templates/footer.php') ?> 