<?php 
 echo $header;
?>
<style>
    /* Estilo para asegurar que todas las imágenes tengan el mismo tamaño */
    .card-img-top {
        width: 100%; /* Hace que la imagen ocupe el 100% del ancho del contenedor */
        height: 600px; /* Define una altura fija para todas las imágenes */
        object-fit: cover; /* Asegura que la imagen cubra el área sin deformarse */
    }

    /* Alineación del título en el cuerpo de la tarjeta */
    .card-body {
        display: flex;
        justify-content: center; /* Centra el contenido horizontalmente */
        align-items: center; /* Centra el contenido verticalmente */
        height: 100%; /* Ajusta la altura del cuerpo de la tarjeta */
    }

    .card-title {
        text-align: center; /* Centra el texto dentro del título */
        font-size: 1.5rem; /* Ajusta el tamaño de la fuente del título */
        margin: 0; /* Elimina márgenes adicionales */
    }
    .card:hover {
        cursor: pointer; /* Cambia el cursor a una mano cuando se pasa por encima de la tarjeta */
    }
    .card-link {
        text-decoration: none; /* Elimina el subrayado del enlace */
        color: inherit; /* Hereda el color del texto de su contenedor */
    }
</style>
<div class="container">
    <div class="row">
    <?php 
    $contador = 1; // Inicializamos el contador en 1
    foreach ($temporadas as $temporada): ?>
        <div class="col-md-4 p-5">
            <a href="<?= base_url('/seasons/page/'.$contador) ?>" class="card-link"> <!-- Enlace que envuelve la tarjeta -->
                <div class="card" style="width:400px">
                    <img class="card-img-top" src=" <?php echo $temporada['cover'];?>" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Temporada <?php echo $contador; ?></h4> <!-- Número de temporada -->
                    </div>
                </div>  
            </a>
        </div>
        <?php 
        $contador++; // Incrementamos el contador
    endforeach; ?>
    </div>
</div>

<?php 
   echo $footer;
?>