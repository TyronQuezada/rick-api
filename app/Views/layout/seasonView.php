<?php 
 echo $header;
//  echo "<pre>";
    $imageUrl = $temporada['data']['cover'];
    // Usamos preg_match para extraer el número de la temporada
    if (preg_match('/temp-(\d+)\.jpg/', $imageUrl, $matches)) {
        $seasonNumber = $matches[1];  // El número de la temporada es el primer valor en el array $matches
    
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="card" style="width:400px">
                <img class="card-img-top" src=" <?php echo $temporada['data']['cover'];?>" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">Temporada <?php echo $seasonNumber;?>
                    </h4> <!-- Número de temporada -->
                </div>
            </div>  
        </div>
    </div>
</div>


<?php 
   echo $footer;
?>