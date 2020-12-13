<!-- http://localhost/conferenciaPHP/calendario.php -->
<?php include_once('includes/templates/header.php'); ?>
<section class="seccion contenedor">
    <h2>Calendario de Eventos</h2>

    <?php
    try {
        require_once 'includes/funciones/bd_conexion.php';
        $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, 
        nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
        $sql .= " ORDER BY eventos.evento_id ASC ";

        $resultado = $conn->query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>     

    <div class="calendario">
        
        <?php
        
        $calendario = array();
       
        while ($eventos = $resultado->fetch_assoc()) {

        //obtener fecha 
        
        $fecha = $eventos['fecha_evento'];
        $categorias = $eventos ['cat_evento'];


            $evento = array(
                'nombre_evento' => $eventos ['nombre_evento'],
                'fecha' => $eventos ['fecha_evento'],
                'hora' => $eventos ['hora_evento'] ,
                'categoria' => $eventos ['cat_evento'],
                'invitado' => $eventos ['nombre_invitado']."".['apellido_invitado']
            );
            $calendario[$fecha][] = $evento;
            ?>
        <?php } //cierre while   ?> 


        <?php  
        //imprime todos los eventos   
            foreach ($calendario as $dia => $lista_eventos) { ?>
            <h3>
                <i class="fa fa-calendar"> </i>  
                    <?php 
                        echo $dia; 
                    ?>        
            </h3>


        <?php } //cierre foreach?>    
 
            <pre> 
                <?php var_dump($calendario); ?> 


            </pre>
                <?php echo "hola aqui estoy";  ?>
        <?php $conn->close(); ?>

    </div>
    <!--.calendario-->
</section>
<?php include_once('includes/templates/footer.php') ?> 


<!-- CODIGO CALENDARIO -----


        <h3>
            <i class="fa fa-calendar" aria-hidden="true"></i>
            2016-12-09                                  </h3>

        <div class="dia">
            <p class="titulo">HTML5 y CSS3</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-09 02:00:00 hrs
            <p>

                <i class="fa fa-code" aria-hidden="true"></i> Taller </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Juan Sanchez </p>

        </div>



        <div class="dia">
            <p class="titulo">WordPress</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-09 19:00:00 hrs
            <p>

                <i class="fa fa-code" aria-hidden="true"></i> Taller </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Harold Garcia </p>

        </div>



        <div class="dia">
            <p class="titulo">Como ser freelancer</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-09 10:00:00 hrs
            <p>

                <i class="fa fa-comment" aria-hidden="true"></i> Conferencias </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Susan Sanchez </p>

        </div>



        <div class="dia">
            <p class="titulo">TecnologÃ­as del Futuro PHP</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-09 05:00:00 hrs
            <p>

                <i class="fa fa-comment" aria-hidden="true"></i> Conferencias </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Juan Sanchez </p>

        </div>



        <div class="dia">
            <p class="titulo">Seguridad en la Web</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-09 07:00:00 hrs
            <p>

                <i class="fa fa-comment" aria-hidden="true"></i> Conferencias </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Shari Herrera </p>

        </div>



        <div class="dia">
            <p class="titulo">DiseÃ±o UI y UX para mÃ³viles</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-09 10:00:00 hrs
            <p>

                <i class="fa fa-university" aria-hidden="true"></i> Seminarios </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Susan Sanchez </p>

        </div>


        <h3>
            <i class="fa fa-calendar" aria-hidden="true"></i>
            2016-12-10                                  </h3>

        <div class="dia">
            <p class="titulo">Angular 5</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-10 19:00:00 hrs
            <p>

                <i class="fa fa-university" aria-hidden="true"></i> Seminarios </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Juan Sanchez </p>

        </div>



        <div class="dia">
            <p class="titulo">PHP y MySQL</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-10 12:00:00 hrs
            <p>

                <i class="fa fa-code" aria-hidden="true"></i> Taller </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Shari Herrera </p>

        </div>



        <div class="dia">
            <p class="titulo">JavaScript Avanzado</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2016-12-10 14:00:00 hrs
            <p>

                <i class="fa fa-code" aria-hidden="true"></i> Taller </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Juan Sanchez </p>

        </div>



        <div class="dia">
            <p class="titulo">SEO en Google</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-10 17:00:00 hrs
            <p>

                <i class="fa fa-code" aria-hidden="true"></i> Taller </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Susana Rivera </p>

        </div>



        <div class="dia">
            <p class="titulo">De Photoshop a HTML5 y CSS3</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-10 19:00:00 hrs
            <p>

                <i class="fa fa-code" aria-hidden="true"></i> Taller </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Harold Garcia </p>

        </div>



        <div class="dia">
            <p class="titulo">PHP Intermedio y Avanzado</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-10 21:00:00 hrs
            <p>

                <i class="fa fa-code" aria-hidden="true"></i> Taller </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Susan Sanchez </p>

        </div>



        <div class="dia">
            <p class="titulo">Como crear una tienda online que venda millones en pocos dÃ­a</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-10 10:00:00 hrs
            <p>

                <i class="fa fa-comment" aria-hidden="true"></i> Conferencias </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Susan Sanchez </p>

        </div>



        <div class="dia">
            <p class="titulo">Los mejores lugares para encontrar trabajo</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-10 17:00:00 hrs
            <p>

                <i class="fa fa-comment" aria-hidden="true"></i> Conferencias </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Rafael Bautista </p>

        </div>



        <div class="dia">
            <p class="titulo">Pasos para crear un negocio rentable </p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-10 19:00:00 hrs
            <p>

                <i class="fa fa-comment" aria-hidden="true"></i> Conferencias </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Shari Herrera </p>

        </div>



        <div class="dia">
            <p class="titulo">DiseÃ±o UI y UX para mÃ³viles</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-10 17:00:00 hrs
            <p>

                <i class="fa fa-university" aria-hidden="true"></i> Seminarios </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Harold Garcia </p>

        </div>


        <h3>
            <i class="fa fa-calendar" aria-hidden="true"></i>
            2016-12-11                                  </h3>

        <div class="dia">
            <p class="titulo">Laravel</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-11 10:00:00 hrs
            <p>

                <i class="fa fa-code" aria-hidden="true"></i> Taller </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Rafael Bautista </p>

        </div>



        <div class="dia">
            <p class="titulo">Crea tu propia API</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-11 12:00:00 hrs
            <p>

                <i class="fa fa-code" aria-hidden="true"></i> Taller </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Shari Herrera </p>

        </div>



        <div class="dia">
            <p class="titulo">JavaScript y jQuery</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-11 14:00:00 hrs
            <p>

                <i class="fa fa-code" aria-hidden="true"></i> Taller </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Juan Sanchez </p>

        </div>



        <div class="dia">
            <p class="titulo">Creando Plantillas para WordPress</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-11 17:00:00 hrs
            <p>

                <i class="fa fa-code" aria-hidden="true"></i> Taller </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Susana Rivera </p>

        </div>



        <div class="dia">
            <p class="titulo">Tiendas Virtuales en Magento</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-11 19:00:00 hrs
            <p>

                <i class="fa fa-code" aria-hidden="true"></i> Taller </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Harold Garcia </p>

        </div>



        <div class="dia">
            <p class="titulo">Creando una App en Android en una maÃ±ana</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-11 10:00:00 hrs
            <p>

                <i class="fa fa-university" aria-hidden="true"></i> Seminarios </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Susana Rivera </p>

        </div>



        <div class="dia">
            <p class="titulo">Creando una App en iOS en una tarde</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-11 17:00:00 hrs
            <p>

                <i class="fa fa-university" aria-hidden="true"></i> Seminarios </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Rafael Bautista </p>

        </div>



        <div class="dia">
            <p class="titulo">Flexbox para principiantes</p>
            <p class="hora"><i class="fa fa-clock-o" aria-hidden="true"></i> 2020-12-10 11:00:00 hrs
            <p>

                <i class="fa fa-comment" aria-hidden="true"></i> Conferencias </p>
            <p><i class="fa fa-user" aria-hidden="true"></i> Susana Rivera </p>

        </div> -->