<?php 
 echo $header;
?>
        <!-- Cards de los planetas -->
        <div class="container">
            <div class="row">
<?php
  foreach ($inicio['data'] as $key => $value) {
?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="my-image">
                        <?php 
                        switch ($key) {
                            case 'characters':
                        ?>
                        <img src="<?= base_url('images/characters.png') ?>" class="hoverImage card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $key;?>
                            </h5>
                            <a href="<?= base_url('characters/page/1') ?>" class="card-link stretched-link"></a>
                        </div>
                        <?php 
                                break;
                            case 'locations':
                        ?>
                        <img src="<?= base_url('images/planet1.png') ?>" class="hoverImage card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $key;?>
                            </h5>
                            <a href="<?= base_url('404/') ?>" class="card-link stretched-link"></a>
                        </div>
                        <?php 
                            break;
                            case 'episodes':
                        ?>
                        <img src="<?= base_url('images/episodes.png') ?>" class="hoverImage card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $key;?>
                            </h5>
                            <a href="<?= base_url('seasons/') ?>" class="card-link stretched-link"></a>
                        </div>
                        <?php         
                            break;
                        }
                        ?>
                    </div>
                </div>
<?php 
  }
?>
            </div>
        </div>
<?php 
   echo $footer;
?>
