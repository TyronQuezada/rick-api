<?php 
 echo $header;
?>
<div class="container">
    <div class="row"> <!-- 'g-4' para agregar espacio entre las tarjetas -->
        <?php foreach ($characters['data']['results'] as $character): ?>
            <div class="col-lg-3 col-md-6 col-12" style="padding: 40px;"> <!-- Asegura 3 tarjetas por fila en pantallas grandes, 2 en medianas y 1 en móviles -->
                <div class="pokemon-card <?php echo ($character['status'] == 'Dead') ? 'dead-card' : 'live-card'; ?>" style="width: 100%; max-width: 400px; margin: auto;">
                    <!-- Header con el nombre -->
                    <div class="card-header">
                        <?php echo $character['name']; ?>
                    </div>
                    
                    <!-- Imagen del personaje -->
                    <div class="card-image">
                        <img src="<?php echo $character['image']; ?>" alt="<?php echo $character['name']; ?>">
                    </div>
                    
                    <!-- Cuerpo con los detalles -->
                    <div class="card-body">
                        <p><strong>Estado:</strong> 
                            <?php 
                                switch ($character['status']) {
                                    case 'Alive':
                                        echo 'Vivo';
                                        break;
                                    case 'Dead':
                                        echo 'Muerto';
                                        break;
                                    case 'unknown':
                                        echo 'Desconocido';
                                        break;
                                    default:
                                        echo $character['status'];
                                }
                            ?>
                        </p>
                        <p><strong>Especie:</strong> <?php echo $character['species']; ?></p>
                        <p><strong>Tipo:</strong> <?php echo $character['type'] ?: 'N/A'; ?></p>
                        <p><strong>Género:</strong> 
                            <?php 
                                switch ($character['gender']) {
                                    case 'Female':
                                        echo 'Femenino';
                                        break;
                                    case 'Male':
                                        echo 'Masculino';
                                        break;
                                    case 'Genderless':
                                        echo 'Sin género';
                                        break;
                                    case 'unknown':
                                        echo 'Desconocido';
                                        break;
                                    default:
                                        echo $character['gender'];
                                }
                            ?>
                        </p>
                        <p><strong>Origen:</strong> <?php echo $character['origin']['name']; ?></p>
                        <p><strong>Ubicación:</strong> <?php echo $character['location']['name']; ?></p>
                    </div>
                    
                    <!-- Footer con número de episodios -->
                    <div class="card-footer">
                        Aparece en <strong><?php echo count($character['episode']); ?></strong> episodios
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Paginador -->
    <div class="container mt-3">
        <ul class="pagination justify-content-center">
            <?php 
            $prev = $characters['data']['info']['prev'];
            $next = $characters['data']['info']['next'];

            function getNumberEpisode($url){
                // Parsear la URL para obtener los parámetros
                if($url == 'null'){
                    return 0; 
                }else{
                    $parsedUrl = parse_url($url);
                    $query = [];
                    parse_str($parsedUrl['query'], $query);
                    // Obtener el número de la página
                    $page = isset($query['page']) ? $query['page'] : null;
                    return $page; // Resultado: 2
                }
            }
            
            
            if (!empty($characters['data']['info']['prev'])): ?>
                <li class="page-item">
                    <a class="page-link" <?php if(getNumberEpisode($prev)==0){echo "inative";}?>
                     href="<?= base_url('characters/page/'.getNumberEpisode($prev)) ?>">Previous</a>
                </li>
            <?php endif; ?>

            <?php if (!empty($characters['data']['info']['next'])): ?>
                <li class="page-item">
                    <a class="page-link" <?php if(getNumberEpisode($next)==0){echo "inative";}?>
                    href="<?= base_url('characters/page/'.getNumberEpisode($next)) ?>">Next</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</div>


<?php 
   echo $footer;
?>