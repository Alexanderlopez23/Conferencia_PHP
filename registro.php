<?php include_once('includes/templates/header.php'); ?>

    <section class="seccion contenedor">
        <h2>Registro de Usuarios</h2>
        <form id="registro" class="registro" action="pagar.html" method="post">
            <div id="datos_usuario" class="registro caja clearfix">
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
                </div>
                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
                </div>
                <div class="campo">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Tu Email">
                </div>
                <div id="error"></div>
            </div>
            <!--#datos_usuario-->

            <div id="paquetes" class="paquetes">
                <h3>Elige el número de boletos</h3>
                <ul class="lista-precios clearfix">
                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por día (viernes)</h3>
                            <p class="numero">$30</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_dia">Boletos deseados:</label>
                                <input type="number" min="0" id="pase_dia" size="3" name="boletos[un_dia][cantidad]" placeholder="0">
                                <input type="hidden" value="30" name="boletos[un_dia][precio]">
                            </div>
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
                            <div class="orden">
                                <label for="pase_completo">Boletos deseados:</label>
                                <input type="number" min="0" id="pase_completo" size="3" name="boletos[completo][cantidad]" placeholder="0">
                                <input type="hidden" value="50" name="boletos[completo][precio]">
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="tabla-precio">
                            <h3>Pase por 2 días (viernes y sábado)</h3>
                            <p class="numero">$45</p>
                            <ul>
                                <li>Bocadillos Gratis</li>
                                <li>Todas las conferencias</li>
                                <li>Todos los talleres</li>
                            </ul>
                            <div class="orden">
                                <label for="pase_dosdias">Boletos deseados:</label>
                                <input type="number" min="0" id="pase_dosdias" size="3" name="boletos[2dias][cantidad]" placeholder="0">
                                <input type="hidden" value="45" name="boletos[2dias][precio]">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--#paquetes-->


            <div id="eventos" class="eventos clearfix">
                <h3>Elige tus talleres</h3>
                <div class="caja">

                    <div id="viernes" class="contenido-dia clearfix">
                        <h4>viernes</h4>


                        <div>
                            <p>Seminario</p>

                            <label>
                                                        <input type="checkbox" name="registro[]" id="10" value="10">
                                                        <time>10:00:00</time> Diseño UI y UX para móviles                                                        <br>
                                                        <span class="autor">Susan Sanchez</span>
                                                   </label>
                        </div>

                        <div>
                            <p>Conferencias</p>

                            <label>
                                                        <input type="checkbox" name="registro[]" id="8" value="8">
                                                        <time>05:00:00</time> Tecnologías del Futuro PHP                                                        <br>
                                                        <span class="autor">Juan Sanchez</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="9" value="9">
                                                        <time>07:00:00</time> Seguridad en la Web                                                        <br>
                                                        <span class="autor">Shari Herrera</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="7" value="7">
                                                        <time>10:00:00</time> Como ser freelancer                                                        <br>
                                                        <span class="autor">Susan Sanchez</span>
                                                   </label>
                        </div>

                        <div>
                            <p>Talleres</p>

                            <label>
                                                        <input type="checkbox" name="registro[]" id="4" value="4">
                                                        <time>02:00:00</time> HTML5 y CSS3                                                        <br>
                                                        <span class="autor">Juan Sanchez</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="6" value="6">
                                                        <time>19:00:00</time> WordPress                                                        <br>
                                                        <span class="autor">Harold Garcia</span>
                                                   </label>
                        </div>
                    </div>
                    <!--.contenido-dia -->
                    <div id="sabado" class="contenido-dia clearfix">
                        <h4>sábado</h4>


                        <div>
                            <p>Seminario</p>

                            <label>
                                                        <input type="checkbox" name="registro[]" id="21" value="21">
                                                        <time>17:00:00</time> Diseño UI y UX para móviles                                                        <br>
                                                        <span class="autor">Harold Garcia</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="11" value="11">
                                                        <time>19:00:00</time> Angular 5                                                        <br>
                                                        <span class="autor">Juan Sanchez</span>
                                                   </label>
                        </div>

                        <div>
                            <p>Conferencias</p>

                            <label>
                                                        <input type="checkbox" name="registro[]" id="17" value="17">
                                                        <time>10:00:00</time> Como crear una tienda online que venda millones en pocos día                                                        <br>
                                                        <span class="autor">Susan Sanchez</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="32" value="32">
                                                        <time>11:00:00</time> Flexbox para principiantes                                                        <br>
                                                        <span class="autor">Susana Rivera</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="18" value="18">
                                                        <time>17:00:00</time> Los mejores lugares para encontrar trabajo                                                        <br>
                                                        <span class="autor">Rafael  Bautista</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="19" value="19">
                                                        <time>19:00:00</time> Pasos para crear un negocio rentable                                                         <br>
                                                        <span class="autor">Shari Herrera</span>
                                                   </label>
                        </div>

                        <div>
                            <p>Talleres</p>

                            <label>
                                                        <input type="checkbox" name="registro[]" id="12" value="12">
                                                        <time>12:00:00</time> PHP y MySQL                                                        <br>
                                                        <span class="autor">Shari Herrera</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="13" value="13">
                                                        <time>14:00:00</time> JavaScript Avanzado                                                        <br>
                                                        <span class="autor">Juan Sanchez</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="14" value="14">
                                                        <time>17:00:00</time> SEO en Google                                                        <br>
                                                        <span class="autor">Susana Rivera</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="15" value="15">
                                                        <time>19:00:00</time> De Photoshop a HTML5 y CSS3                                                        <br>
                                                        <span class="autor">Harold Garcia</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="16" value="16">
                                                        <time>21:00:00</time> PHP Intermedio y Avanzado                                                        <br>
                                                        <span class="autor">Susan Sanchez</span>
                                                   </label>
                        </div>
                    </div>
                    <!--.contenido-dia -->
                    <div id="domingo" class="contenido-dia clearfix">
                        <h4>domingo</h4>


                        <div>
                            <p>Seminario</p>

                            <label>
                                                        <input type="checkbox" name="registro[]" id="30" value="30">
                                                        <time>10:00:00</time> Creando una App en Android en una mañana                                                        <br>
                                                        <span class="autor">Susana Rivera</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="31" value="31">
                                                        <time>17:00:00</time> Creando una App en iOS en una tarde                                                        <br>
                                                        <span class="autor">Rafael  Bautista</span>
                                                   </label>
                        </div>

                        <div>
                            <p>Talleres</p>

                            <label>
                                                        <input type="checkbox" name="registro[]" id="22" value="22">
                                                        <time>10:00:00</time> Laravel                                                        <br>
                                                        <span class="autor">Rafael  Bautista</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="23" value="23">
                                                        <time>12:00:00</time> Crea tu propia API                                                        <br>
                                                        <span class="autor">Shari Herrera</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="24" value="24">
                                                        <time>14:00:00</time> JavaScript y jQuery                                                        <br>
                                                        <span class="autor">Juan Sanchez</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="25" value="25">
                                                        <time>17:00:00</time> Creando Plantillas para WordPress                                                        <br>
                                                        <span class="autor">Susana Rivera</span>
                                                   </label>
                            <label>
                                                        <input type="checkbox" name="registro[]" id="26" value="26">
                                                        <time>19:00:00</time> Tiendas Virtuales en Magento                                                        <br>
                                                        <span class="autor">Harold Garcia</span>
                                                   </label>
                        </div>
                    </div>
                    <!--.contenido-dia -->
                </div>
                <!--.caja-->
            </div>
            <!--#eventos-->

            <div id="resumen" class="resumen">
                <h3>Pago y Extras</h3>
                <div class="caja clearfix">
                    <div class="extras">
                        <div class="orden">
                            <label for="camisa_evento">Camisa del evento $10 <small>(promocion 7% dto.)</small></label>
                            <input type="number" min="0" id="camisa_evento" name="pedido_extra[camisas][cantidad]" size="3" placeholder="0">
                            <input type="hidden" value="10" name="pedido_extra[camisas][precio]">
                        </div>
                        <!--.orden-->
                        <div class="orden">
                            <label for="etiquetas">Paquete de 10 etiquetas $2 <small>(HTML5, CSS3, JavaScript, Chrome)</small></label>
                            <input type="number" min="0" id="etiquetas" name="pedido_extra[etiquetas][cantidad]" size="3" placeholder="0">
                            <input type="hidden" value="2" name="pedido_extra[etiquetas][precio]">
                        </div>
                        <!--.orden-->
                        <div class="orden">
                            <label for="regalo">Seleccione un regalo</label> <br>
                            <select id="regalo" name="regalo" required>
                                            <option value="">- Seleccione un regalo --</option>
                                            <option value="2">Etiquetas</option>
                                            <option value="1">Pulsera</option>
                                            <option value="3">Plumas</option>
                                        </select>
                        </div>
                        <!--.orden-->

                        <input type="button" id="calcular" class="button" value="Calcular">
                    </div>
                    <!--.extras-->

                    <div class="total">
                        <p>Resumen:</p>
                        <div id="lista-productos">

                        </div>
                        <p>Total:</p>
                        <div id="suma-total">

                        </div>
                        <input type="hidden" name="total_pedido" id="total_pedido">
                        <input type="hidden" name="total_descuento" id="total_descuento" value="total_descuento">
                        <input id="btnRegistro" type="submit" name="submit" class="button" value="Pagar">
                    </div>
                    <!--.total-->
                </div>
                <!--.caja-->
            </div>
            <!--#resumen-->

        </form>
    </section>

  <?php include_once('includes/templates/footer.php'); ?>