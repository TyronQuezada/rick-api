<?php 
 echo $header;
?>
    <style>
        /* Card container */
        .magic-card {
            max-width: 400px;
            border: 5px solid #000;
            border-radius: 8px;
            background-color: #e9d8a6;
            overflow: hidden;
            position: relative;
            max-height: 750px;
        }

        /* Card header */
        .magic-card-header {
            background: linear-gradient(to right, #f2c94c, #f2994a);
            padding: 10px;
            text-align: center;
            font-weight: bold;
            font-size: 1.5rem;
            color: #000;
        }

        /* Card image */
        .magic-card-image {
            width: 100%;
            border-bottom: 2px solid #000;
        }

        /* Card description */
        .magic-card-body {
            padding: 15px;
            color: #000;
        }

        .magic-card-body p {
            font-size: 0.9rem;
            line-height: 1.5;
            margin: 5px 0;
        }

        /* Abilities styling */
        .magic-card-abilities {
            padding: 10px;
            background-color: #fff;
            border: 1px solid #000;
            border-radius: 5px;
            margin-top: 10px;
            height: 300px;
            
        }

        .magic-card-abilities p {
            margin: 5px 0;
            padding-left: 15px;
            position: relative;
            font-size: 16px !important;
        }

        .magic-card-abilities p::before {
            content: "+";
            position: absolute;
            left: 0;
            color: #000;
            font-weight: bold;
        }

        /* Footer */
        .magic-card-footer {
            text-align: center;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
<!-- Paginador -->
<div class="container mt-3">
        <ul class="pagination justify-content-center">
            <?php 
            $prev = $characters['data']['info']['prev'];
            $next = $characters['data']['info']['next'];
            
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
<div class="container">
    <div class="row" style="padding: 0px;"> <!-- 'g-4' para agregar espacio entre las tarjetas -->
        <?php foreach ($characters['data']['results'] as $character):
         $episodios = [];
         // Iteramos sobre las URLs y extraemos el número
         foreach ($character['episode'] as $url) {
             // Extraer el número al final de la URL
             $parts = explode('/', $url);
             $episodios[] = end($parts); // Obtener la última parte
         } 
         // Convertir a enteros (opcional)
         $episodios = array_map('intval', $episodios);
         $encodedEpisodes = json_encode($episodios); // Codifica el array como JSON
         $encodedCharacter = json_encode($character); // Codifica el array como JSON
        ?>
            <div class="col-lg-3 col-md-6 col-12"> <!-- Asegura 3 tarjetas por fila en pantallas grandes, 2 en medianas y 1 en móviles -->
                <div class="container d-flex justify-content-center align-items-center mt-5">
                    <div class="magic-card">
                        <!-- Header -->
                        <div class="magic-card-header"><?= $character['name'] ?>
                        </div>

                        <!-- Image -->
                        <img src="<?php echo $character['image']; ?>" alt="<?= $character['name'] ?>" class="magic-card-image">

                        <!-- Description -->
                        <div class="magic-card-body">
                            <div class="magic-card-abilities">
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
                            <div class="magic-card-footer">
                                <a href="<?php echo base_url('charactersEpisodes?data=' . urlencode($encodedEpisodes).'&character='.$encodedCharacter); ?>
                                " style="text-decoration: none; color: inherit;">
                                    Aparece en <strong><?php echo count($character['episode']); ?></strong> episodio(s)
                                </a>
                            </div>
                        </div>
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