<?php 
 echo $header;
    $imageUrl = $temporada['data']['cover'];
    // Usamos preg_match para extraer el número de la temporada
    if (preg_match('/temp-(\d+)\.jpg/', $imageUrl, $matches)) {
        $seasonNumber = $matches[1];  // El número de la temporada es el primer valor en el array $matches
    
}
?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 80%;
        margin: 20px auto;
    }
    .episodios-list {
        list-style-type: none;
        padding: 0;
    }
    .episodio {
        background-color: #fff;
        border-radius: 8px;
        margin: 10px 0;
        padding: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-size: 22px;
    }
    .episodio h3 {
        margin: 0;
        font-size: 18px;
    }
    .episodio p {
        margin: 5px 0;
    }
    .back-button {
        display: block;
        width: fit-content;
        margin: 30px auto 0; /* Centrar y añadir espacio al final */
        padding: 10px 20px;
        font-size: 18px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .back-button:hover {
        background-color: #0056b3;
    }
    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
    }
    .modal-content {
        background-color: #fff;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        text-align: center;
        border-radius: 10px;
        position: relative;
    }
    .modal iframe {
        width: 100%;
        height: 680px;
        border: none;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-5">
            <div class="card" style="width:200px">
                <img class="card-img-top" src=" <?php echo $temporada['data']['cover'];?>" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Temporada <?php echo $seasonNumber;?>
                </h4> <!-- Número de temporada -->
            </div>
        </div>  
        <div class="col-md-4"></div>
    </div>
</div>

    <h1>Lista de Episodios</h1>

    <div class="row p-0 m-0">
        <?php 
        $int = 1;
        foreach ($temporada['data']['episodios'] as $key => $episodio): ?>
            <div class="episodio col-md-3 m-3">
                <p><strong>Temporada:</strong> <?php echo $seasonNumber;?></p>
                <h3>Episodio <?= $int ?>: <?= $key ?></h3>
                <p><a href="#" onclick="openModal('<?= $episodio ?>')">Ver episodio</a></p>
            </div>
        <?php
        $int++; 
        endforeach; ?>
    </div>


    <!-- Botón Volver al final del listado -->
    <a href="<?= base_url('seasons/')?>
    " class="back-button">Volver</a>


<!-- Modal -->
<div id="episodeModal" class="modal">
    <div class="modal-content">
        <iframe id="videoPlayer" src="" allow="fullscreen"></iframe>
        <button class="back-button" onclick="closeModal()">Cerrar</button>
    </div>
</div>

<script>
    const modal = document.getElementById('episodeModal');
    const videoPlayer = document.getElementById('videoPlayer');
    let previousUrl = null;

    // Abrir el modal y cargar el video
    function openModal(url) {
        previousUrl = videoPlayer.src; // Guardar la URL anterior
        videoPlayer.src = url; // Cargar el episodio en el iframe
        modal.style.display = 'block'; // Mostrar el modal
    }

    // Cerrar el modal y detener el video
    function closeModal() {
        modal.style.display = 'none'; // Ocultar el modal
        videoPlayer.src = ''; // Detener el video
    }

    // Alternar pantalla completa
    function toggleFullscreen() {
        if (videoPlayer.requestFullscreen) {
            videoPlayer.requestFullscreen();
        } else if (videoPlayer.webkitRequestFullscreen) {
            videoPlayer.webkitRequestFullscreen(); // Safari
        } else if (videoPlayer.msRequestFullscreen) {
            videoPlayer.msRequestFullscreen(); // IE/Edge
        }
    }

    // Volver al episodio anterior
    function goBack() {
        if (previousUrl) {
            videoPlayer.src = previousUrl; // Cargar el episodio anterior
        }
    }

    // Cerrar el modal al hacer clic fuera del contenido
    window.onclick = function(event) {
        if (event.target === modal) {
            closeModal();
        }
    }
</script>

<?php 
   echo $footer;
?>